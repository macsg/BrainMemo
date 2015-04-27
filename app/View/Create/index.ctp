<section id="lesson">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal">
                    <br>
                    <br>
                    <h1 class="text-center">Create Question</h1>
                    <br>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="name.." required maxlength="32">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name"  class="col-sm-4 control-label">Description:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="des" placeholder="description.." required maxlength="225">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="language" class="col-sm-4 control-label">Language</label>
                        <div class="col-sm-6">
                            <select class="form-control"  id="language" name="language2" width="100%">
                                <option value="1">Chinese</option>
                                <option value="2">English</option>
                                <option value="3">Japanese</option>
                                <option value="4">Thai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numQuiz" class="col-sm-4 control-label">Number of quiz:</label>
                        <div class="col-sm-6 text-left">
                            <label class="radio-inline">
                                <input type="radio" name="numQuiz" id="num10" value="10" checked> 10
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="numQuiz" id="num20" value="20"> 20
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="numQuiz" id="num30" value="30"> 30
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="typeQuiz" class="col-sm-4 control-label">type of quiz:</label>
                        <div class="col-sm-6 text-left">
                            <label class="radio-inline">
                                <input type="radio" name="typeQuiz" id="type1" value="type1" checked> select word
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="typeQuiz" id="type2" value="type2"> select picture
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="typeQuiz" id="type3" value="type3"> word answer
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="span7 text-center">
                        <button type="submit" class="btn btn-default"><?php echo $this->Html->link('Next', array('controller' => 'create', 'action' => 'sub_create')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>