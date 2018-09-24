<label for="" class="control-label col-sm-4">
    <b>Mệnh giá</b>
</label>
<div class="col-sm-8">
    <div class="selectpicker">
        <span class="arrow-up"></span>
        <select name="card_price" id="price">
            <option value="999">Mệnh giá</option>
            @forelse($dataMoney  as $item)
                <option value="{{$item->money}}">{{number_format($item->money)}}-{{number_format($item->rate)}} <b class="text-danger">{{$item->rate_name}}</b></option>
            @empty
            @endforelse
        </select>
    </div>
    <p class="text-danger" id="error-price"></p>
</div>