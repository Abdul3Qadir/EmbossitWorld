window.addEventListener('load', function() {
    const card = document.getElementById('feedback-card');
    if (!card) return;

    const emojiBtns = card.querySelectorAll('.emoji-btn');
    const submitBtn = card.querySelector('#submit-feedback-btn');
    const resetBtn = card.querySelector('#reset-feedback-btn');
    const feedbackForm = card.querySelector('#feedback-form');
    const successMsg = card.querySelector('#success-message');
    const inputField = card.querySelector('#feedback-note');
    const errorMsg = card.querySelector('#validation-error');
    const btnIcon = card.querySelector('#btn-icon');
    const btnSpinner = card.querySelector('#btn-spinner');

    let selectedEmoji = null;

    emojiBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            selectedEmoji = this.getAttribute('data-val');
            errorMsg.classList.add('opacity-0');
            inputField.classList.remove('border-red-200');
            
            emojiBtns.forEach(b => {
                b.classList.add('opacity-40', 'grayscale-[0.5]');
                b.querySelector('div').classList.replace('ring-4', 'ring-transparent');
                b.querySelector('div').classList.replace('bg-blue-50', 'bg-gray-50');
            });

            this.classList.remove('opacity-40', 'grayscale-[0.5]');
            const div = this.querySelector('div');
            div.classList.replace('bg-gray-50', 'bg-blue-50');
            div.classList.add('ring-4', 'ring-blue-100');
        });
    });

    inputField.addEventListener('input', function() {
        if (this.value.trim() !== "" || selectedEmoji) {
            errorMsg.classList.add('opacity-0');
            inputField.classList.remove('border-red-200');
        }
    });

    submitBtn.addEventListener('click', function() {
        const note = inputField.value.trim();

        if (!selectedEmoji && note === "") {
            errorMsg.innerText = "Please enter a valid feedback !";
            errorMsg.classList.remove('opacity-0');
            inputField.classList.add('border-red-200');
            return;
        }

        btnIcon.classList.add('hidden');
        btnSpinner.classList.remove('hidden');
        submitBtn.classList.add('pointer-events-none', 'bg-blue-600');

        setTimeout(() => {
            feedbackForm.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            setTimeout(() => {
                feedbackForm.classList.add('hidden');
                successMsg.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
                successMsg.classList.add('opacity-100', 'scale-100');
                card.classList.add('border-green-200');
            }, 400);
        }, 1500);
    });

    resetBtn.addEventListener('click', function() {
        selectedEmoji = null;
        inputField.value = "";
        errorMsg.classList.add('opacity-0');
        inputField.classList.remove('border-red-200');
        
        successMsg.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
        successMsg.classList.remove('opacity-100', 'scale-100');
        
        setTimeout(() => {
            feedbackForm.classList.remove('hidden', 'opacity-0', 'scale-95', 'pointer-events-none');
            card.classList.remove('border-green-200');
            btnIcon.classList.remove('hidden');
            btnSpinner.classList.add('hidden');
            submitBtn.classList.remove('pointer-events-none', 'bg-blue-600');
            
            emojiBtns.forEach(b => {
                b.classList.remove('opacity-40', 'grayscale-[0.5]');
                b.querySelector('div').classList.remove('ring-4', 'ring-blue-100', 'bg-blue-50');
                b.querySelector('div').classList.add('bg-gray-50');
            });
        }, 400);
    });
});