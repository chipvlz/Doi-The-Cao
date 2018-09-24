<div id="telo-game">
<div class="form-group">
    <input type="hidden" name="" id="nick-game" value="{{$data['user_game']}}">
    <label for="" class="control-label col-sm-4">
        <b> Nhà mạng</b>
    </label>
    <div class="col-sm-8">
        <div class="homenetwork" id="cardnetwork">
            @forelse($data['telco'] as $item)
            <a href="javascript:void(0)">
                <input type="radio" name="telco" class="telco" id="{{$item['telco']}}" value="{{$item['telco']}}">
                <label for="{{$item['telco']}}">
                    <img src="{{$item['image']}}" class="img-telco" alt="">
                </label>
            </a>
            @empty
            @endforelse

        </div>
    </div>
</div>
<div class="form-group" id="price-class">
    <div class="money-telco">
        <label for="" class="control-label col-sm-4">
            <b>Mệnh giá</b>
        </label>
        <div class="col-sm-8">
            <div class="selectpicker">
                <span class="arrow-up"></span>
                <select name="card_price" id="price">
                    <option value="999">Mệnh giá</option>
                    <option value="10000">10,000</option>
                    <option value="20000">20,000</option>
                    <option value="50000">50,000</option>
                </select>
            </div>
            <p class="text-danger" id="error-price"></p>
        </div>
    </div>
</div>
</div>
<div id="nick-game">
<div class="form-group" id="user-game-class">
    <label for="" class="control-label col-sm-4">
        <b>Nick game</b>
    </label>
    <div class="col-sm-8">
        <input name="game_user" type="text" id="game-user" value="{{$data['user_game']}}" class="form-control isNumber text-left">
        <p class="text-danger" id="error-user-game-code"></p>
    </div>
</div>
</div>