<?php
/* @var $this yii\web\View */
$this->title = $model->title;
?>

<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-10 content-main">
                <div class="content-grid">
        <div class="content-grid-single">
        <h5>July 24, 2014  Posted by: <a href="#"><?php echo $model->username; ?></a></h5>
        <h3><a href=""><?php echo $model->title; ?></a></h3>
        <img src="/../web/public/images/<?php echo $model->image; ?>" alt=""/>
        <p></p>
        <h3><?php echo $model->text; ?></h3>

    <span>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</span>
    <img class="single-pic" src="images/c1.jpg" alt=""/>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Nullam a efficitur odio, ac maximus lorem. Nullam aliquam fermentum lectus ut sagittis. Sed pulvinar sed ligula gravida condimentum. Proin eleifend vestibulum tortor, ut pellentesque lorem tempor a. Nunc pharetra lacus at laoreet suscipit. Aliquam tempor mattis sagittis. Mauris viverra mi quis risus molestie placerat. Sed accumsan vestibulum fringilla. Etiam dapibus tellus ac eros placerat, at aliquam arcu lobortis. Vestibulum sollicitudin mauris dui, a tempor metus lacinia sed. Nam a auctor purus, nec rutrum ipsum.
        Maecenas lacus ex, finibus non tempor at, ultrices id sem. Suspendisse et magna et tellus facilisis lacinia at et diam. Fusce finibus ullamcorper ligula non tristique. Nulla facilisi. Donec ultricies nisi vel quam venenatis efficitur. Praesent porta risus arcu, at egestas ante accumsan eu. Phasellus et lacus quis lacus imperdiet fermentum eu a enim. Praesent non lorem rhoncus, cursus leo nec, pellentesque dui.</p>

    <div class="content-form">
        <h3>Leave a comment</h3>
        <form>
            <input type="text" placeholder="Name" required/>
            <input type="text" placeholder="E-mail" required/>
            <input type="text" placeholder="Phone" required/>
            <textarea placeholder="Message"></textarea>
            <input type="submit" value="SEND"/>
        </form>
    </div>
    <div class="comments">
        <h3>Comment</h3>
        <div class="comment-grid">
            <img src="images/pic.png" alt=""/>
            <div class="comment-info">
                <h4>MARK JOHNSON</h4>
                <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
                <h5>On April 14, 2014, 18:01</h5>
                <a href="#">Reply</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="comment-grid">
            <img src="images/pic.png" alt=""/>
            <div class="comment-info">
                <h4>MARK JOHNSON</h4>
                <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
                <h5>On April 14, 2014, 18:01</h5>
                <a href="#">Reply</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

