<div style="margin:150px"></div>
<div class="admin">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>CATEGORY MANAGEMENT</h1>
            <hr class="seperate">
            <div class = "container" id="usertable">
                <table class="table-striped table-bordered table-striped" style="width:100%" >
                    <thead>
                    <tr>
                        <col class='col-sm-1' />
                        <col class='col-sm-2' />
                        <col class='col-sm-3' />
                        <col class='col-sm-3' />
                        <col class='col-sm-2' />
                        <col class='col-sm-1' />
                        <th class='text-center'>Cat ID</th>
                        <th class='text-center'>Name</th>
                        <th class='text-center'>Date Created</th>
                        <th class='text-center'>Date Modified</th>
                        <th class='text-center'>Edit</th>
                        <th class='text-center'>Del</th>

                    </tr>
                    </thead>
                    <?php foreach ($cats as $cat):?>
                        <tr>
                            <td class='text-center'><?php echo $cat['Category']['id']?></td>
                            <td class='text-center' ><?php echo $cat['Category']['name']?></td>
                            <td class='text-center' ><?php echo $cat['Category']['created']?></td>
                            <td class='text-center' ><?php echo $cat['Category']['modified']?></td>
                            <td class='text-center' ><?php echo $this->Html->link(__('Edit'), array('action' => 'editCat', $cat['Category']['id'])); ?></td>
                            <td class='text-center'><?php echo $this->Html->link('<i class="glyphicon glyphicon-remove-circle" ></i>',
                                    array('controller' => 'admins','action'=> 'deleteCat',$cat['Category']['id']),
                                    array( 'class' => 'btn btn-danger','escape' => FALSE),'Are you sure to remove Cat: '.$cat['Category']['name'].' ?')?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            <hr class="seperate">
            <?php echo $this->Html->link('Back to main page', array('controller' => 'admins', 'action' => 'index'));?></div>            
        </div>
    </div>
</div>