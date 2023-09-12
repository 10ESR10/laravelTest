<div>
    <form>

        <p>
            <input
                type="button"
                value="회원리스트"
                onclick="location.href = '{{route('users')}}'">
                <input
                    id="backMain"
                    type="button"
                    value="상세페이지"
                    onclick="location.href = '{{route('profile')}}'"></p>
                <div>
                    <p>세션정보</p>
                    <p>아이디:
                        {{ session('user_id') }}</p>
                    <p>생년월일:
                        {{ session('birth_date') }}</p>
                    <p>가입일시:
                        {{ session('created_at') }}</p>
                </div>

            </form>
        </div>