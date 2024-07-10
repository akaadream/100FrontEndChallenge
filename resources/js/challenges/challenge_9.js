const lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
const uppercase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
const numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
const symbols = ['&', '(', '-', '_', ')', '@', '#', '{', '}'];

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('password-length');
    if (slider) {
        updateValue(slider);
        slider.addEventListener('mousemove', () => {
            updateValue(slider);
        });
    }

    const generate = document.getElementById('generate');
    if (generate) {
        generate.addEventListener('click', (event) => {
            event.preventDefault();

            const generated = document.getElementById('generated');
            if (generated) {
                generated.innerText = getPassword();
            }
        });
    }

    const copy = document.getElementById('copy');
    if (copy) {
        copy.addEventListener('click', (event) => {
            event.preventDefault();

            if (!navigator.clipboard) {
                return;
            }

            const generated = document.getElementById('generated');
            if (generated) {
                navigator.clipboard.writeText(generated.innerText).then(() => {
                    alert('Password copied!');
                });
            }
        });
    }

    const regenerate = document.getElementById('reload');
    if (regenerate) {
        regenerate.addEventListener('click', (event) => {
            event.preventDefault();

            const generated = document.getElementById('generated');
            if (generated) {
                generated.innerText = getPassword();
            }
        });
    }
});

function updateValue(slider) {
    const value = (slider.value - parseInt(slider.getAttribute('min'))) / (parseInt(slider.getAttribute('max')) - parseInt(slider.getAttribute('min'))) * 100;
    document.querySelector(':root').style.setProperty('--range-width', `${value}%`);
}

function getPassword() {
    const slider = document.getElementById('password-length');
    if (slider) {
        const length = Math.round(slider.value);
        let password = '';
        for (let i = 0; i < length; i++) {
            password += getRandom(getType())
        }

        return password;
    }

    return '';
}

function getRandom(array) {
    if (array == null) {
        return '';
    }

    const random = Math.floor(Math.random() * array.length);
    return array[random];
}

function getType() {
    const uppercaseCheck = document.getElementById('uppercase');
    const lowercaseCheck = document.getElementById('lowercase');
    const numbersCheck = document.getElementById('numbers');
    const symbolsCheck = document.getElementById('symbols');

    let types = 0;
    if (uppercaseCheck.checked) {
        types++;
    }
    if (lowercaseCheck.checked) {
        types++;
    }
    if (numbersCheck.checked) {
        types++;
    }
    if (symbolsCheck.checked) {
        types++;
    }

    const random = Math.floor(Math.random() * (types - 1) + 1);
    switch (random) {
        case 1:
            if (uppercaseCheck.checked) {
                return uppercase;
            }
            else if (lowercaseCheck.checked) {
                return lowercase;
            }
            else if (numbersCheck.checked) {
                return numbers;
            }
            return symbols;
        case 2:
            if (lowercaseCheck.checked) {
                return lowercase;
            }
            else if (numbersCheck.checked) {
                return numbers;
            }
            return symbols;
        case 3:
            if (numbersCheck.checked) {
                return numbers;
            }
            return symbols;
        case 4:
            return symbols;
    }

    return null;
}
