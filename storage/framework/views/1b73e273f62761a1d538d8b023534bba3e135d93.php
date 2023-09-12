<div >
        <form action="/auth/login" method="POST">
            <?php echo csrf_field(); ?>
            <p >&nbsp 로 그 인</p>
            <p >
                <label for="user_Id" >아이디</label>
                <input type="text" name="user_Id" id="user_Id"  size="30">
               
            </p>
            <p class="mt-6">
                <label for="password" >비밀번호</label>
                <input type="password" name="password" id="password"  size="30">
               
            </p>
            

            <p class=>
                <input  type="submit" value="로그인">
                <input  id="backMain" type="button"
                       value="회원가입" onclick="location.href = '<?php echo e(route('register')); ?>'">
            </p>
        </form>
    </div><?php /**PATH /var/www/html/weinLaravel/resources/views/auth/login.blade.php ENDPATH**/ ?>