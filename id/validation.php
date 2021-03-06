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

    'accepted'             => 'Inputan :attribute harus diterima.',
    'active_url'           => 'Inputan :attribute bukan URL yang valid.',
    'after'                => 'Inputan :attribute harus tanggal setelah :date.',
    'after_or_equal'       => 'Inputan :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                => 'Inputan :attribute harus berupa huruf.',
    'alpha_dash'           => 'Inputan :attribute harus berupa huruf, angka, dan garis bawah.',
    'alpha_num'            => 'Inputan :attribute harus berupa huruf dan angka.',
    'array'                => 'Inputan :attribute harus berupa array.',
    'before'               => 'Inputan :attribute harus tanggal sebelum :date.',
    'before_or_equal'      => 'Inputan :attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => 'Inputan :attribute harus antara :min dan :max.',
        'file'    => 'Inputan :attribute harus antara :min dan :max kilobytes.',
        'string'  => 'Inputan :attribute harus antara :min dan :max karakter.',
        'array'   => 'Inputan :attribute harus antara :min dan :max item.',
    ],
    'boolean'              => 'Inputan :attribute harus berupa salah atau benar.',
    'confirmed'            => 'Inputan konfirmasi :attribute tidak sama.',
    'date'                 => 'Inputan :attribute bukan tanggal yang valid.',
    'date_format'          => 'Inputan :attribute tidak sesuai dengan format :format.',
    'different'            => 'Inputan :attribute dan :other harus berbeda.',
    'digits'               => 'Inputan :attribute harus :digits angka.',
    'digits_between'       => 'Inputan :attribute harus antara :min dan :max angka.',
    'dimensions'           => 'Inputan :attribute memiliki dimensi yang tidak valid.',
    'distinct'             => 'Inputan :attribute memiliki nilai duplikasi.',
    'email'                => 'Inputan :attribute harus berupa alamat email.',
    'exists'               => 'Inputan :attribute tidak ditemukan.',
    'file'                 => 'Inputan :attribute harus berupa file.',
    'filled'               => 'Inputan :attribute harus diisi.',
    'image'                => 'Inputan :attribute harus berupa gambar.',
    'in'                   => 'Inputan :attribute tidak valid.',
    'in_array'             => 'Inputan :attribute tidak ditemukan pada :other.',
    'integer'              => 'Inputan :attribute harus berupa integer.',
    'ip'                   => 'Inputan :attribute harus berupa alamat IP.',
    'ipv4'                 => 'Inputan :attribute harus berupa alamat IPv4.',
    'ipv6'                 => 'Inputan :attribute harus berupa alamat IPv6.',
    'json'                 => 'Inputan :attribute harus berupa JSON.',
    'max'                  => [
        'numeric' => 'Inputan :attribute tidak boleh lebih dari :max.',
        'file'    => 'Inputan :attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => 'Inputan :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'Inputan :attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes'                => 'Inputan :attribute harus berupa file: :values.',
    'mimetypes'            => 'Inputan :attribute harus berupa file dengan tipe: :values.',
    'min'                  => [
        'numeric' => 'Inputan :attribute minimal harus :min.',
        'file'    => 'Inputan :attribute minimal harus :min kilobytes.',
        'string'  => 'Inputan :attribute minimal harus :min karakter.',
        'array'   => 'Inputan :attribute minimal harus memiliki :min item.',
    ],
    'not_in'               => 'Inputan :attribute yang dipilih tidak valid.',
    'numeric'              => 'Inputan :attribute harus berupa nomor.',
    'present'              => 'Inputan :attribute harus ada.',
    'regex'                => 'Format isian :attribute tidak valid.',
    'required'             => 'Inputan :attribute harus diisi.',
    'required_if'          => 'Inputan :attribute harus diisi ketika :other diisi :value.',
    'required_unless'      => 'Inputan :attribute harus diisi kecuali :other diisi :value.',
    'required_with'        => 'Inputan :attribute harus diisi ketika :values diisi.',
    'required_with_all'    => 'Inputan :attribute harus diisi ketika :values diisi.',
    'required_without'     => 'Inputan :attribute harus diisi ketika :values tidak diisi.',
    'required_without_all' => 'Inputan :attribute harus diisi ketika tidak satupun :values diisi.',
    'same'                 => 'Inputan :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Inputan :attribute harus :size.',
        'file'    => 'Inputan :attribute harus :size kilobytes.',
        'string'  => 'Inputan :attribute harus :size karakter.',
        'array'   => 'Inputan :attribute harus :size item.',
    ],
    'string'               => 'Inputan :attribute harus berupa string.',
    'timezone'             => 'Inputan :attribute harus berupa timezone.',
    'unique'               => 'Inputan :attribute sudah ada.',
    'uploaded'             => 'Inputan :attribute gagal diunggah.',
    'url'                  => 'Format isian :attribute tidak valid.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [],

];