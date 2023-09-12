
<div>
    <p>&nbsp 회 원 정 보</p>
    <p>
        <label for="userId">
            <span>*</span>
            아이디</label>
        <input
            id="userId"
            type="text"
            name="userId"
            size="30"
            value="{{Auth::user()->user_id}}"
            readonly="readonly"></p>
        <form method="POST" action="profile/email">
            @csrf
            <p class="mt-6">
                <label for="email_name">
                    <span>*</span>
                    이메일</label>
                <input
                    id="email_name"
                    type="text"
                    name="email_name"
                    size="30"
                    value="{{ strtok(Auth::user()->email, '@') }}">
                    @ @php $domains = ['gmail.com', 'naver.com', 'yahoo.com', 'kakao.com',
                    'test.com']; $user_domain = explode('@', Auth::user()->email)[1]; @endphp
                    <select name="email_domain">
                        @foreach($domains as $domain)
                        <option
                            value="{{ $domain }}"
                            {{
        $domain == $user_domain ? 'selected' : '' }}>{{ $domain }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <input type="submit" value="이메일 수정"></form>
                    <form method="POST" action="profile/password">
                        @csrf
                        <p class="mt-6">
                            <label for="password">
                                <span>*</span>
                                비밀번호</label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                size="30">
                                <span>영문,숫자,특수문자 포함 8~15자리 입니다.</span>
                                <p>{{Session::get('message')}}</p>

                            </p>

                            <p class="mt-6">
                                <label for="password_confirmation">
                                    <span class="text-sm text-red-500">*</span>
                                    비밀번호 확인</label>

                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    size="30">

                                    <input
                                        type="submit"
                                        value="비밀번호 수정"></p>
                                </form>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                                <form method="POST" action="profile/birthDate">
                                    @csrf
                                    <p class="mt-6">

                                        <label for="birth_date">
                                            <span>*</span>
                                            생년월일</label>
                                        <input
                                            id="birth_date"
                                            type="date"
                                            name="birth_date"
                                            size="30"
                                            value="{{Auth::user() -> birth_date}}">
                                            <input
                                                type="submit"
                                                value="생년월일 수정"></p>
                                        </form>

                                        <p>

                                            <form action="/profile/delete" method="POST" id="deleteProfileForm">
                                                @csrf @method('DELETE')
                                                <input
                                                    type="button"
                                                    value="회원 탈퇴"
                                                    onclick="showModal();"></form>

                                                
                                                <div
                                                    id="customModal"
                                                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
                                                    <div
                                                        style="position: relative; top: 50%; transform: translateY(-50%); width: 80%; max-width: 400px; margin: 0 auto; background: white; padding: 20px; text-align: center;">
                                                        <p>정말로 탈퇴하시겠습니까? 탈퇴 후 1달 이내에 재 가입 하실 수 없습니다.</p>
                                                        <label>
                                                            <input type="checkbox" id="agreeCheckbox">
                                                                확인 했습니다.</label>
                                                            <br>
                                                                <button onclick="submitForm();">확인</button>
                                                                <button onclick="closeModal();">취소</button>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            function showModal() {
                                                                document
                                                                    .getElementById('customModal')
                                                                    .style
                                                                    .display = 'block';
                                                            }

                                                            function closeModal() {
                                                                document
                                                                    .getElementById('customModal')
                                                                    .style
                                                                    .display = 'none';
                                                            }

                                                            function submitForm() {
                                                                const isAgreed = document
                                                                    .getElementById('agreeCheckbox')
                                                                    .checked;
                                                                if (isAgreed) {
                                                                    document
                                                                        .getElementById('deleteProfileForm')
                                                                        .submit();
                                                                } else {
                                                                    alert('약관에 동의해주세요.');
                                                                }
                                                            }
                                                        </script>

                                                    </p>

                                                    @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif @if(session('message'))
                                                    <div class="alert alert-warning">
                                                        {{ session('message') }}
                                                    </div>
                                                    @endif @if(session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                    @endif
                                                </div>