3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32

 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
				<form method="post"  action="<?php echo e(url('/save_bagian')); ?>"/>
                  <table class="table table-bordered">
				  <tr>
					<td>Nama Bagian</td>
					<td><input type="text" class="form-control" name="nama"/></td>
					</tr>
					<tr>
					<td>Keterangan</td>
					<td><input type="text" class="form-control"  name="keterangan"/></td>
				  </tr>
				  <tr>
					<td></td>
					<td><input type="submit" name="save"/></td>
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
				  </tr>
				  </form>
	      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>