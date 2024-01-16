<div class="form-success">
    <div class="shadow"></div>
    <div class="form-success-info">
        <div class="success-close">
            X
        </div>
        <div class="form-success-img">
            <img src="{{asset('/images/successForm.png')}}">
        </div>
        <div class="success-title">
            @if ($orderId)
                Ваш заказ #{{$orderId}} оформлен
            @else
                Ваша заявка отправлена
            @endif
        </div>
        <div class="success-desc">
            Скоро наши менеджеры свяжутся с Вами
        </div>
    </div>
</div>
