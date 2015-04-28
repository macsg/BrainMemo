<!-- Header -->
<section id="lesson">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal">
                    <br>
                    <br>
                    <div class="text-center">
                        <?php echo $this->Html->image('200x200.png', array(
                        'class' => 'img-thumnial text-center',
                        'id' => 'blah',
                        'alt' => 'your image'));?>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="addpic" class="col-sm-3 control-label text-right">Add picture :</label>
                        <div class="col-sm-6">
                            
                            <input type='file' id="imgInp" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="answer" class="col-sm-3 control-label text-right">Answer :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="answer" placeholder="answer.." required maxlength="32">
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <nav>
                            <ul class="pagination">
                                <li><a href="create.html" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function(){
            readURL(this);
        });
</script>
</section>
