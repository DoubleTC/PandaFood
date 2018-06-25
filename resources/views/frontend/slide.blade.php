<div id="thm-mart-slideshow" class="thm-mart-slideshow">
    <div class="container">
        <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
            <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
                <ul>
                    @foreach($slidelist as $slide)
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('uploads/slides/'.$slide->slide_img)}}'><img src='{{asset('uploads/slides/'.$slide->slide_img)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="{{asset('uploads/slides/'.$slide->slide_line2)}}"  />
                            <div class="info">
                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='180'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>{{$slide->slide_line1}}</span></div>
                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>{{$slide->slide_line2}}</span></div>
                                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='{{$slide->slide_url}}' class="buy-btn">Mua ngay</a></div>
                                <div class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>{{$slide->slide_line3}}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>