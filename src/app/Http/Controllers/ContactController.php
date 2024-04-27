<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::all();
    return view('index', compact('contacts'));
  }
  public function confirm(ContactRequest $request)
  {
    // この後、処理内容を記述します
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'inquiry_type', 'detail']);
    return view('confirm', compact('contact'));
  }
  public function store(ContactRequest $request)
  {
    // ここに処理を記述していきます
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'inquiry_type', 'detail']);

    // 電話番号の結合
    $tel = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

    // $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

    $contact = collect($contact)->filter()->all();

    // genderフィールドがnullの場合は、デフォルト値を設定する
    if (!isset($contact['gender'])) {
      $contact['gender'] = 0; // デフォルト値を設定（0など適切な値を設定）
    }

    // 電話番号を連想配列に追加
    $contact['tel'] = $tel;

    Contact::create($contact);

    return view('thanks');
  }

}
