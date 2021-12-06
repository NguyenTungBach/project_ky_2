@if($item->ship_status == \App\Enums\OrderStatus::Waiting || $item->ship_status == \App\Enums\OrderStatus::Processing)
    <td style="padding: 13px 5px 5px 5px; text-align: center">
        <input type="hidden" value="{{$item->id}}" name="id">
        <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd" >
            <option value="0" {{$item->ship_status == \App\Enums\OrderStatus::Cancel ? 'selected' : ''}}>Huỷ đơn</option>
            <option value="1" {{$item->ship_status == \App\Enums\OrderStatus::Done ? 'selected' : ''}}>Đã giao hàng</option>
            <option value="2" {{$item->ship_status == \App\Enums\OrderStatus::Waiting ? 'selected' : ''}}>Chờ xác nhận</option>
            <option value="3" {{$item->ship_status == \App\Enums\OrderStatus::Processing ? 'selected' : ''}}>Đang xử lý</option>
            <option value="-1" {{$item->ship_status == \App\Enums\OrderStatus::Deleted ? 'selected' : ''}} >Xoá</option>
        </select>
    </td>
@elseif($item->ship_status == \App\Enums\OrderStatus::Done)
    <td style="padding: 13px 5px 5px 5px; text-align: center">
        <input type="hidden" value="{{$item->id}}" name="id">
        <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd" >
            <option value="0" >Huỷ đơn</option>
            <option value="1" selected>Đã giao hàng</option>
            <option value="2" disabled>Chờ xác nhận</option>
            <option value="3" disabled>Đang xử lý</option>
            <option value="-1" >Xoá</option>
        </select>
    </td>
@elseif($item->ship_status == \App\Enums\OrderStatus::Cancel)
    <td style="padding: 13px 5px 5px 5px; text-align: center">
        <input type="hidden" value="{{$item->id}}" name="id">
        <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd" >
            <option value="0" selected>Huỷ đơn</option>
            <option value="1" disabled>Đã giao hàng</option>
            <option value="2" disabled>Chờ xác nhận</option>
            <option value="3" disabled>Đang xử lý</option>
            <option value="-1"}}>Xoá</option>
        </select>
    </td>
@elseif($item->ship_status == \App\Enums\OrderStatus::Deleted)
<td style="padding: 13px 5px 5px 5px; text-align: center">
    <input type="hidden" value="{{$item->id}}" name="id">
    <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd">
        <option value="0" disabled>Huỷ đơn</option>
        <option value="1" disabled>Đã giao hàng</option>
        <option value="2" disabled>Chờ xác nhận</option>
        <option value="3" disabled>Đang xử lý</option>
        <option value="-1" selected>Xoá</option>
    </select>
</td>
@endif

