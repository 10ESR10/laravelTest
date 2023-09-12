<div>
    <form>

        <p>
            <input
                type="button"
                value="회원리스트"
                onclick="location.href = '<?php echo e(route('users')); ?>'">
                <input
                    id="backMain"
                    type="button"
                    value="상세페이지"
                    onclick="location.href = '<?php echo e(route('profile')); ?>'"></p>
                <div>
                    <p>세션정보</p>
                    <p>아이디:
                        <?php echo e(session('user_id')); ?></p>
                    <p>생년월일:
                        <?php echo e(session('birth_date')); ?></p>
                    <p>가입일시:
                        <?php echo e(session('created_at')); ?></p>
                </div>

            </form>
        </div><?php /**PATH /var/www/html/weinLaravel/resources/views/dashboard.blade.php ENDPATH**/ ?>