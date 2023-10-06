<form method="get" action="{{ route("search") }}">
    <label for="orderByColumn">Sıralama Sütunu:</label>
    <select name="yeni" id="orderByColumn">
        <option value="id">ID</option>
        <option value="total_price">total_price</option>
        <option value="created_at">Oluşturulma Tarihi</option>
        <!-- Diğer sıralama sütunları için gerekli seçenekleri ekleyebilirsiniz -->
    </select>

    <label for="orderByDirection">Sıralama Yönü:</label>
    <select name="orderByDirection" id="orderByDirection">
        <option value="asc">Artan</option>
        <option value="desc">Azalan</option>
    </select>

    <button type="submit">Sırala</button>
</form>
@foreach ($orderBy as $e)



<li>{{ $e->id}} - {{ $e->total_r }}</li>

@endforeach

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const orderByDirectionSelect = document.getElementById("orderByDirection");
        const orderByForm = document.getElementById("orderByForm");

        orderByDirectionSelect.addEventListener("change", function () {
            if (this.value === "desc") {
                // Eğer "Azalan" seçildiyse, formu göndermeden önce sıralama yönünü tersine çevirin
                orderByForm.submit();
            }
        });
    });
</script>
