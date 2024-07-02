<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* CSS Anda tetap seperti sebelumnya */
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>

        <!-- Error message container -->
        <div id="error-message" class="error" style="display: none;">
            Invalid credentials. Please try again.
        </div>
    </div>

    <!-- Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <h2>Success!</h2>
            <p id="modal-message"></p>
            <button onclick="closeModal()">OK</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage.textContent.trim().length > 0) {
                errorMessage.style.display = 'block';
                showModal(errorMessage.textContent);
            }
        });

        function showModal(message) {
            var modal = document.getElementById('successModal');
            var modalMessage = document.getElementById('modal-message');
            modalMessage.textContent = message;
            modal.style.display = 'flex';
        }

        function closeModal() {
            var modal = document.getElementById('successModal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
