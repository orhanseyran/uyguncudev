<x-mail::message>
# Introduction

The body of your message.
<x-mail::table>
    # Sipariş Tamamlandı

    {{-- Sayın {{ $yeni->name ."-". $yeni->surname }}, --}}

    Siparişiniz başarıyla tamamlandı. Ayrıntıları aşağıda bulabilirsiniz:

    | Ürün Adı     | Adet     | Birim Fiyat   | Toplam       |
    | ------------ | -------- | ------------- | ------------ |
    @foreach($sipariş as $detail)

    | {{ $detail->name }}     | {{ $detail->qty }} | {{ $detail->price }}  TL
    @endforeach

    Toplam tutar:  TL

    Teşekkür ederiz, alışverişiniz için.

</x-mail::table>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
