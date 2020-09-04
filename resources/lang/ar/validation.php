<?php 

return [
    'required' => ' :attribute مطلوب',
    'email' => ' :attribute غير صحيح',
    'min' => [
        'numeric' => ':attribute لابد ان يكون اكثر من :min',
        'file' => 'حجم :attribute يجب ان يكون اكثر من :min كيلوبايت.',
        'string' => ' :attribute يجب ان  يكون اكثر من :min حرف.',
        'array' => 'The :attribute must have at least :min items.',
    ], 
    'max' => [
        'numeric' => ':attribute لا يجب ان يكون اقل من :max',
        'file' => 'حجم :attribute لا يجب ان يكون اقل من :max كيلوبايت.',
        'string' => ' :attribute لا يجب ان يكون اقل من :max احرف.',
        'array' => 'The :attribute must have at least :max items.',
    ],
    'alpha' => ' :attribute يحتوى على احرف غير صالحه',
    'alpha_num' => ' :attribute لا يسمح الا بالحروف والارقام فقط',
    'regex' => ' :attribute لا يسمح الا بالحروف والمسافات فقط',
    'unique' => ' :attribute موجود بالفعل',

    // custom validation message
    'custom' => [
        'email' => [
            'unique' => ':attribute موجود بالفعل , هل نسيت كلمة السر ؟',
        ],
        'terms' => [
            'required' => 'لابد من قبول :attribute الخاصة بالموقع',
        ],
        'password' => [
            'confirmed' => 'كلمة السر غير متطابقه',
        ],
    ],
    // custom attribute for error message
    'attributes' => [
        'fullname' => 'الاسم الكامل',
        'username' => 'اسم المستخدم',
        'email' => 'البريد الالكترونى',
        'password' => 'كلمة السر',
        'terms' => 'الشروط والاحكام',
        'phone' => 'الهاتف',
    ],
];