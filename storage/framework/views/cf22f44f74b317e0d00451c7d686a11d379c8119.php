<div >
    <form method="POST" action="/auth/register">
        <?php echo csrf_field(); ?>
        <p >&nbsp 회 원 가 입</p>
        <p>
            <label for="name" >
                <span >*</span>
                이름</label>
            <input
                id="name"
                type="text"
                name="name"
                size="30"
                value="<?php echo e(old('name') ? old('name') : ' '); ?>"></p>
            <p>
                <label for="user_Id">
                    <span >*</span>
                    아이디</label>
                <input
                    id="user_Id"
                    type="text"
                    name="user_Id"
                    size="30"
                    value="<?php echo e(old('user_Id') ? old('user_Id') : ' '); ?>">
                    <span >아이디는 영문만 가능합니다.</span>
                </p>
                <?php if($errors->has('user_Id')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('user_Id')); ?></strong>
                </span>
                <?php endif; ?>
                <div>
                    <label for="email_name">이메일</label>
                    <input
                        id="email_name"
                        type="text"
                        name="email_name"
                        value="<?php echo e(old('email_name')); ?>"
                        required="required"
                        autocomplete="email_name"
                        autofocus="autofocus">

                        @ <?php $domains = ['gmail.com', 'naver.com', 'yahoo.com', 'kakao.com',
                        'test.com']; ?>
                        <select name="email_domain" class="mt-1 block w-half inline">
                            <?php $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $domain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($domain); ?>"><?php echo e($domain); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('email_name')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email_name')); ?></strong>
                        </span>
                        <?php endif; ?>

                    </div>

                    <p class="mt-6">
                        <label for="password" >
                            <span>*</span>
                            비밀번호</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            size="30">
                            <span>비밀번호는 영문,숫자,특수문자 포함 8~15자리 입니다.</span>
                        </p>

                        <p class="mt-6">
                            <label for="password_confirmation">
                                <span>*</span>
                                비밀번호 확인</label>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                size="30"></p>
                            <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?>
                            <p class="mt-6">
                                <label for="birth_date">
                                    <span>*</span>
                                    생년월일</label>
                                <input
                                    id="birth_date"
                                    type="date"
                                    name="birth_date"
                                    size="30"
                                    value="<?php echo e(old('birth_date') ? old('birth_date') : ' '); ?>"></p>
                                    <a href="#" onclick="alert('본 기관에서는 공무원 채용 및 관리를 위해 「개인정보 보호법」제15조, 제17조등관계 법령에 따라 아래와 같이 개인정보를 수집 및 이용하고자 합니다.(1) 개인정보 수집 및 이용 목적 : 공무원 채용 및 관리(2) 개인정보 수집 항목 : 성명, 생년월일, 이메일 조회에 관한 사항 (3) 개인정보 보유 및 이용기간 : 최종합격자 발표일로부터 5년* 개인정보 활용 목적 달성 이후 공공기록물 관리에 관한 법률에 따라 보유 후 파기(4) 개인정보의 수집·이용과 관련하여 동의를 거부할 권리가 있으며, 동의거부 시 공무원 채용 및임용 제한을 받을 수 있습니다')">개인(신용)정보</a>의 수집·이용에 관한 사항(필수)
                                <input id="checkbox" type="checkbox" name="checkbox" required="required">
                                <a href="#" onclick="alert('본 약관은 회사가 운영하는 웹사이트에서 제공하는 온라인 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버몰과 이용자의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.')">서비스 이용</a>에 관한 사항(필수)
                                    <input id="checkbox" type="checkbox" name="checkbox" required="required">
                                   

                                        <p class="mt-8 text-center">
                                            <input
                                                type="submit"
                                                value="가입">
                                                <input
                                                    id="backMain"
                                                    type="button"
                                                    value="취소"
                                                    onclick="location.href = '<?php echo e(route('main')); ?>'"></p>

                                            </form>

                                        </div><?php /**PATH /var/www/html/weinLaravel/resources/views/auth/register.blade.php ENDPATH**/ ?>