document.addEventListener('DOMContentLoaded', () => {
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('keydown', () => {
            const current = phoneInput.value;
            phoneInput.value = toPhoneNumber(current, 2);
        });
    }
});

function toPhoneNumber(number) {
    const withoutSpaces = number.replace(/\s/g, "");
    return withoutSpaces.replace(/\d{2}(?=.)/g, '$& ');
}
