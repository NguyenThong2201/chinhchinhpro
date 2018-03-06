<div class="modal fade" id="view-{{$pr->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info mgT100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="/home/images/{{$pr->image}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>{{$pr->name}}</h5>
                        <h6>{{$pr->unit_price}}</h6>
                        <span>{{$pr->description}}</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">Size:
								<label class="radio-inline"><input type="radio" name="optradio">M</label>
								<label class="radio-inline"><input type="radio" name="optradio">S</label>
								<label class="radio-inline"><input type="radio" name="optradio">L</label>
							</span>
                            <p >
                                @if($pr->unit_price - $pr->promotion_price > 0)
                                <del>{{number_format($pr->unit_price)}}</del>
                                @endif
                                <em class="item_price">{{number_format($pr->promotion_price) }}</em>
                            </p>
                            <div class="add">
                                <a href="javascript:void(0)">
                                    <button class="btn btn-danger my-cart-btn my-cart-b them-giohang" data-id="{{$pr->id}}" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">

    var url = form.attr('action');
    var data = {
        food_id         : foodId,
        option_1_1_count: option11Count,
        option_1_2_count: option12Count,
        option_1_3_count: option13Count
    };
    $.ajax({
        method     : 'POST',
        url        : url,
        data       : JSON.stringify(data),
        contentType: 'application/json',
        dataType   : 'json'
    }).done(function (data) {
        if (isRedirect) {
            btnSubmit.prop('disabled', false).find('.fa-spin').remove();
            location.href = '/order';
        } else {
            var img = modal.find('.img-add-cart').eq(0),
                ele = isMobile ? '.mobile-top-cart' : '.header-cart';
            flyToElement(img, ele, function () {
                $('#_desktop_cart').html(data.orderListMinHtml);
                $('#order-cart-icon').html(data.orderCartIconHtml);
                $('#menu-mobile-items-count').html(data.item_count);
                btnSubmit.prop('disabled', false).find('.fa-spin').remove();
            });
        }
    }).fail(function (jqXHR) {
        if (jqXHR.status === 403 || jqXHR.status === 422) {
            errorEle.html(jqXHR.responseJSON.error).show();
            btnSubmit.prop('disabled', false).find('.fa-spin').remove();
        } else {
            console.log(jqXHR);
        }
    });
</script> -->
