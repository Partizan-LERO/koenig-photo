<div>
    <h1>Новый заказ с сайта #{{ $order->id }}!</h1>
    <br>
    <p>Имя: {{ $order->name }}</p>
    <p>E-mail: {{ $order->email }}</p>
    <p>Телефон: {{ $order->phone_number}}</p>
    <p>Выбранный тариф: {{ $order->tariff->title}}</p>
    <p>Стоимость: {{ $order->tariff->price}} рублей</p>
    <p>Комментарий: {{ $order->comment}}</p>
</div>