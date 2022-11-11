<div class="content row">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
            Page public (<?php echo $countpagepublic?>)
        </button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
            Page draft (<?php echo $countpagedraft?>)
        </button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
            All Page (<?php echo $countall?>)
        </button>
    </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="display" id="datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Published</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($pagePublic as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade pt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="display" id="datatable0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Published</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($pagedraft as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a href="<?php echo base_url()?>/manage/page/edit/<?= $row['id'];?>">Edit</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/page/delete/<?= $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    
        <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="display" id="datatable1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Published</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($page as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a href="<?php echo base_url()?>/manage/page/edit/<?= $row['id'];?>">Edit</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/page/delete/<?= $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</div>