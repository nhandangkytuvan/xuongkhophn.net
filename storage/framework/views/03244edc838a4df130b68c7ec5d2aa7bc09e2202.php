<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo term</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="term_name"  value="<?php echo e(old('term_name')); ?>">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Chọn cấp danh mục</label>
                        <select name="term_id" id="" class="form-control">
                            <option value="0">Chọn cấp danh mục</option>
                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($term->term_id == 0): ?>
                                    <option value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                                    <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <?php if($term2->term_id == $term->id): ?>
                                            <option value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <?php if($term3->term_id == $term2->id): ?>
                                                    <option value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                                    <?php  unset($data['terms'][$key3])  ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            <?php  unset($data['terms'][$key2])  ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control" name="term_description" rows="3"><?php echo e(old('term_description')); ?></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control" name="term_keyword" rows="5"><?php echo e(old('term_keyword')); ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm term</button> 
            </div>
        </div>
    </div>
</form>