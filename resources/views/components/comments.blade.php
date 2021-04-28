<div class="comments-list">
    @foreach($comments as $comment)

        <div class="comment-item">
            <div class="comment-row">
                <span class="comment-title">{{ $comment['title'] }}</span>
            </div>
            <div class="comment-row d-flex align-items-center">
                <span class="comment-detail">{{ $comment['date'] }}</span>
                <span class="comment-detail d-flex align-items-center">
                                                        <div class="pr-2">{{ $comment['username'] }}</div>
                                                    </span>
                <span class="comment-detail comment-buyer-badge">خریدار</span>
            </div>
            <div class="comment-separator comment-separator-half"></div>
            <div class="comment-row">
                <div class="comment-status">
                    <i class="fa fa-thumbs-up"></i>
                    <span> خرید این محصول را توصیه می کنم</span>
                </div>
            </div>
            <div class="comment-row">
                <div class="comment-content">
                    {{ $comment['content'] }}
                </div>
            </div>
            <div class="comment-separator comment-separator-half"></div>
            <div class="comment-row">
                <div class="comment-color d-flex align-items-center">
                    <span class="comment-color-circle"></span>
                    مشکی
                </div>
                <a href="" class="comment-seller">
                    <i class="fa fa-home ml-2"></i>
                    دیجی کالا
                </a>
            </div>
            <div class="comment-row">
                <div class="comment-helpful d-flex justify-content-end">
                    <div class="comment-helpful-question">
                        آیا این دیدگاه برایتان مفید بود؟
                    </div>
                    <div class="comment-helpful-yes">
                        0
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="comment-helpful-no">
                        <i class="far fa-flag"></i>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</div>
