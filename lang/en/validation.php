<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'error, :attribute kabul edilmelidir.',
    'active_url' => 'error, :attribute geçerli bir URL değil.',
    'after' => 'error, :attribute :date tarihinden sonra olmalıdır.',
    'after_or_equal' => 'error, :attribute :date tarihine eşit veya daha sonra olmalıdır.',
    'alpha' => 'error, :attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => 'error, :attribute sadece harfler, rakamlar, tire ve alt çizgi içerebilir.',
    'alpha_num' => 'error, :attribute sadece harfler ve rakamlar içerebilir.',
    'array' => 'error, :attribute dizi olmalıdır.',
    'before' => 'error, :attribute :date tarihinden önce olmalıdır.',
    'before_or_equal' => 'error, :attribute :date tarihine eşit veya daha önce olmalıdır.',
    'between' => [
        'array' => 'error, :attribute :min - :max arasında olmalıdır.',
        'file' => 'error, :attribute :min - :max kilobayt arasında olmalıdır.',
        'numeric' => 'error, :attribute :min - :max arasında olmalıdır.',
        'string' => 'error, :attribute :min - :max karakter arasında olmalıdır.',
    ],
    'boolean' => 'error, :attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => 'error, :attribute onayı eşleşmiyor.',
    'date' => 'error, :attribute geçerli bir tarih değil.',
    'date_equals' => 'error, :attribute :date tarihine eşit olmalıdır.',
    'date_format' => 'error, :attribute :format biçimine uymuyor.',
    'different' => 'error, :attribute ve :other birbirinden farklı olmalıdır.',
    'digits' => 'error, :attribute :digits basamaklı olmalıdır.',
    'digits_between' => 'error, :attribute :min - :max basamaklı olmalıdır.',
    'dimensions' => 'error, :attribute geçersiz resim boyutlarına sahip.',
    'distinct' => 'error, :attribute alanı yinelenen bir değere sahip.',
    'email' => 'error, :attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => 'error, :attribute şunlardan biriyle bitmelidir: :values.',
    'exists' => 'error, seçili :attribute geçersiz.',
    'file' => 'error, :attribute dosya olmalıdır.',
    'filled' => 'error, :attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
        'array' => 'error, :attribute :value değerinden daha fazla olmalıdır.',
        'file' => 'error, :attribute :value kilobayttan daha büyük olmalıdır.',
        'numeric' => 'error, :attribute :value değerinden daha büyük olmalıdır.',
        'string' => 'error, :attribute :value karakterden daha büyük olmalıdır.',
    ],
    'gte' => [
        'array' => 'error, :attribute :value değerinden fazla veya eşit olmalıdır.',
        'file' => 'error, :attribute :value kilobayttan büyük veya eşit olmalıdır.',
        'numeric' => 'error, :attribute :value değerinden büyük veya eşit olmalıdır.',
        'string' => 'error, :attribute :value karakterden büyük veya eşit olmalıdır.',
    ],
    'image' => 'error, :attribute resim dosyası olmalıdır.',
    'in' => 'error, seçili :attribute geçersiz.',
    'in_array' => 'error, :attribute alanı :other içinde mevcut değil.',
    'integer' => 'error, :attribute tam sayı olmalıdır.',
    'ip' => 'error, :attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => 'error, :attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => 'error, :attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => 'error, :attribute geçerli bir JSON dizgisi olmalıdır.',
    'lt' => [
        'array' => 'error, :attribute :value değerinden daha az olmalıdır.',
        'file' => 'error, :attribute :value kilobayttan daha küçük olmalıdır.',
        'numeric' => 'error, :attribute :value değerinden daha küçük olmalıdır.',
        'string' => 'error, :attribute :value karakterden daha küçük olmalıdır.',
    ],
    'lte' => [
        'array' => 'error, :attribute :value değerinden az veya eşit olmalıdır.',
        'file' => 'error, :attribute :value kilobayttan küçük veya eşit olmalıdır.',
        'numeric' => 'error, :attribute :value değerinden küçük veya eşit olmalıdır.',
        'string' => 'error, :attribute :value karakterden küçük veya eşit olmalıdır.',
    ],

    'max' => [
        'array' => 'error, :attribute :max değerinden fazla olamaz.',
        'file' => 'error, :attribute :max kilobayttan büyük olamaz.',
        'numeric' => 'error, :attribute :max değerinden büyük olamaz.',
        'string' => 'error, :attribute :max karakterden büyük olamaz.',
    ],
    'mimes' => 'error, :attribute şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => 'error, :attribute şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => 'error, :attribute en az :min değerinden oluşmalıdır.',
        'file' => 'error, :attribute en az :min kilobayttan oluşmalıdır.',
        'numeric' => 'error, :attribute en az :min değerinden oluşmalıdır.',
        'string' => 'error, :attribute en az :min karakterden oluşmalıdır.',
    ],
    'not_in' => 'error, seçili :attribute geçersiz.',
    'not_regex' => 'error, :attribute biçimi geçersiz.',
    'numeric' => 'error, :attribute sayı olmalıdır.',
    'password' => 'error, şifre yanlış.',
    'present' => 'error, :attribute alanı mevcut olmalıdır.',
    'regex' => 'error, :attribute biçimi geçersiz.',
    'required' => 'error, :attribute alanı zorunludur.',
    'required_if' => 'error, :attribute alanı :other :value olduğunda zorunludur.',
    'required_unless' => 'error, :attribute alanı :other :values içinde değilse zorunludur.',
    'required_with' => 'error, :attribute alanı :values mevcut olduğunda zorunludur.',
    'required_with_all' => 'error, :attribute alanı :values mevcut olduğunda zorunludur.',
    'required_without' => 'error, :attribute alanı :values mevcut olmadığında zorunludur.',
    'required_without_all' => 'error, :attribute alanı :values mevcut olmadığında zorunludur.',
    'same' => 'error, :attribute ve :other eşleşmelidir.',
    'size' => [
        'array' => 'error, :attribute :size değerinden oluşmalıdır.',
        'file' => 'error, :attribute :size kilobayt olmalıdır.',
        'numeric' => 'error, :attribute :size olmalıdır.',
        'string' => 'error, :attribute :size karakter olmalıdır.',
    ],
    'starts_with' => 'error, :attribute şunlardan biriyle başlamalıdır: :values',
    'string' => 'error, :attribute dize olmalıdır.',
    'timezone' => 'error, :attribute geçerli bir bölge olmalıdır.',
    'unique' => 'error, :attribute daha önce alınmış.',
    'uploaded' => 'error, :attribute yüklenemedi.',
    'url' => 'error, :attribute biçimi geçersiz.',
    'uuid' => 'error, :attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'İsim',
        'surname' => 'Soyisim',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'created_at' => 'Tarih',
        'office_id' => 'Ofis',
        'project_id' => 'Proje',
        'product_id' => 'Ürün',
        'point' => 'Puan',
        'quantity' => 'Adet',
        'user_id' => 'Kullanıcı',
        'file' => 'Dosya',
        'title' => 'Başlık',
        'description' => 'Açıklama',
        'image' => 'Resim',
        'status' => 'Durum',
        'content' => 'İçerik',
        'start_date' => 'Başlangıç Tarihi',
        'end_date' => 'Bitiş Tarihi',
        'start_time' => 'Başlangıç Saati',
        'end_time' => 'Bitiş Saati',
        'type' => 'Tip',
        'users' => 'Kullanıcılar',
        'location' => 'Konum',
        'color' => 'Renk',
        'text_color' => 'Yazı Rengi',
        'password' => 'Şifre',
        'password_confirmation' => 'Şifre Tekrar',
        'old_password' => 'Eski Şifre',
        'new_password' => 'Yeni Şifre',
        'new_password_confirmation' => 'Yeni Şifre Tekrar',
    ],

];
