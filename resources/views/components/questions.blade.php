@foreach($questions as $question)
    <div class="question-item">
        <div class="question-item-title">
            <i class="far fa-question-circle ml-3"></i>
            <span>{{ $question['question'] }}</span>
        </div>
        <div class="question-item-reply">
            <div class="question-reply-body">

                <span>{{ $question['answer'] }}</span>
            </div>
            <div class="question-reply-footer d-flex justify-content-between pt-3">
                <div class="question-reply-name">{{ $question['answer_username'] }}</div>
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
    </div>

@endforeach
