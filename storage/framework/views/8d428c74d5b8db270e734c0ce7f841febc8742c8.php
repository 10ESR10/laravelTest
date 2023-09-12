<div class="mx-auto p-8 max-w-3xl h-auto bg-white shadow-lg">
    <form method="POST" action="register">
        <?php echo csrf_field(); ?>
        <p class="border-b border-gray-400 text-left mb-8 pb-1 text-2xl">&nbsp 회 원 가 입</p>
        <p>
            <label for="name" class="inline-block w-1/4 text-right mr-4">
                <span class="text-sm text-red-500">*</span>
                이름</label>
            <input
                id="name"
                type="text"
                name="name"
                class="<?php echo e($errors-> first('name') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2
                "
                size="30"
                value="<?php echo e(old('name') ? old('name') : ' '); ?>"></p>
            <p>
                <label for="user_Id" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    아이디</label>
                <input
                    id="user_Id"
                    type="text"
                    name="user_Id"
                    class="<?php echo e($errors-> first('user_Id') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2
                "
                    size="30"
                    value="<?php echo e(old('user_Id') ? old('user_Id') : ' '); ?>">
                    <span class="ml-4 text-sm text-gray-500">아이디는 영문만 가능합니다.</span>
                </p>
                <?php if($errors->has('user_Id')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('user_Id')); ?></strong>
                </span>
                <?php endif; ?>
                <p class="mt-6">
                    <label for="email" class="inline-block w-1/4 text-right mr-4">
                        <span class="text-sm text-red-500">*</span>
                        이메일</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        class="<?php echo e($errors-> first('email') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2"
                        size="30"
                        value="<?php echo e(old('email') ? old('email') : ' '); ?>"></p>
                        <?php if($errors->has('email')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>
                    <p class="mt-6">
                        <label for="password" class="inline-block w-1/4 text-right mr-4">
                            <span class="text-sm text-red-500">*</span>
                            비밀번호</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="<?php echo e($errors-> first('password') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2"
                            size="30">
                            <span class="ml-4 text-sm text-gray-500">비밀번호는 영문,숫자,특수문자 포함 8~15자리 입니다.</span>
                        </p>

                        <p class="mt-6">
                            <label for="password_confirmation" class="inline-block w-1/4 text-right mr-4">
                                <span class="text-sm text-red-500">*</span>
                                비밀번호 확인</label>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                class="<?php echo e($errors-> first('password_confirmation') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2"
                                size="30"></p>
                                <?php if($errors->has('password')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
                            <p class="mt-6">
                                <label for="birth_date" class="inline-block w-1/4 text-right mr-4">
                                    <span class="text-sm text-red-500">*</span>
                                    생년월일</label>
                                <input
                                    id="birth_date"
                                    type="date"
                                    name="birth_date"
                                    class="<?php echo e($errors-> first('birth_date') ? 'border-2 border-red-600' : 'border-2 border-blue-400'); ?> rounded-lg pl-2"
                                    size="30"
                                    value="<?php echo e(old('birth_date') ? old('birth_date') : ' '); ?>"></p>
                                    <input
                                    id="checkbox"
                                    type="checkbox"
                                    name="checkbox"
                                    
                                    
                                    required></p>
                                    <input
                                    id="checkbox"
                                    type="checkbox"
                                    name="checkbox"
                                    
                                    
                                    required></p>

                                <p class="mt-8 text-center">
                                    <input
                                        class="bg-blue-600 rounded-xl hover:bg-blue-800 text-white px-6 py-2 mr-6"
                                        type="submit"
                                        value="가입">
                                        <input
                                            class="bg-red-600 rounded-xl hover:bg-red-800 text-white px-6 py-2"
                                            id="backMain"
                                            type="button"
                                            value="취소"
                                            onclick="location.href = '<?php echo e(route('main')); ?>'"></p>
                                    
                                    </form>
                                   
                                </div><?php /**PATH /var/www/html/weinLaravel/resources/views/register.blade.php ENDPATH**/ ?>