<?php $__env->startSection('judul', 'CRUD | Beranda'); ?>
<?php $__env->startSection('konten'); ?>
<div class="container mt-5">
    <div class="card">
            <div class="card-body bg-info border-dark">

                <div class="myBtn">
                <div class="text right">
    <a href="/tambah" class="btn btn-dark btn-outline-light" style="width:170px;">Tambah Mahasiswa</a>
</div>
</div>
<?php if($message = Session::get('message')): ?>
    <h1 class="text-center"><?php echo e($message); ?></h1>
<?php else: ?>
<table class="table table-hover table-bordered table-light table-striped">
            <thead class="thead-dark">
                <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Nim</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">Dosen Wali</th>
                <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
    <?php $i=1;?>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr >
                <td scope="col" class="cntr"><?php echo $i;?></td>
                <td scope="col"><?php echo e($mhs->nama); ?></td>
                <td scope="col" class="cntr"><?php echo e($mhs->nim); ?></td>
                <td scope="col" ><?php echo e($mhs->jenis_kelamin); ?></td>
                <td scope="col"><?php echo e($mhs->dosen->nama); ?></td>
                <td scope="col" class="text-center">
                <a href="/edit/id=<?php echo e($mhs->id); ?>" class="btn btn-info btn-sm" style="width:80px;">Edit </a>
                <a href="/hapus/id=<?php echo e($mhs->id); ?>" class="btn btn-warning btn-sm" style="width:80px;">Hapus </a>
                </td>
            </tr>

        <?php ++$i;?>
        </div>
</div>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD\resources\views/home.blade.php ENDPATH**/ ?>