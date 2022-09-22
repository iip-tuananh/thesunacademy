<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
    @csrf
    <p>Họ và tên<br>
    <span class="wpcf7-form-control-wrap text-958"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên"></span>
    </p>
    <p>Số điện thoại<br>
    <span class="wpcf7-form-control-wrap tel-505"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Điện thoại"></span> 
    </p>
    <p class="hiden-vantheweb">
    <label><input type="hidden" name="mess" value="{{languageName($product->name)}}"></label> 
    </p>
    <p><input type="submit" value="Gửi thông tin" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="ajax-loader"></span></p>
    <div class="wpcf7-response-output" aria-hidden="true"></div>
</form>