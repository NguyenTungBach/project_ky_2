@if($item->status == \App\Enums\ContactStatus::Delete)
    <select name="status-update" class="status-update" data-id="{{$item->id}}"
            style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd">
        <option value="0" selected>Xóa</option>
        <option disabled value="1">Chưa đọc</option>
        <option disabled value="2">Đã đọc</option>
    </select>
@elseif($item->status == \App\Enums\ContactStatus::Unread)
    <select name="status-update" class="status-update" data-id="{{$item->id}}"
            style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd">
        <option value="0" >Xóa</option>
        <option selected value="1">Chưa đọc</option>
        <option  value="2">Đã đọc</option>
    </select>
@else
    <select name="status-update" class="status-update" data-id="{{$item->id}}"
            style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd">
        <option value="0" >Xóa</option>
        <option disabled value="1">Chưa đọc</option>
        <option  selected value="2">Đã đọc</option>
    </select>
@endif
