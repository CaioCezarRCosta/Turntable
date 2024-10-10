document.getElementById('cadastroForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Obter os valores dos campos
    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
    const dob = document.getElementById('dob').value;
    const telefone = document.getElementById('telefone').value.trim();
    const gender = document.getElementById('gender').value;

    let errors = [];

    // Validações
    if (fullName === '') errors.push('O nome completo é obrigatório.');
    if (!validateEmail(email)) errors.push('Email inválido.');
    if (password === '') errors.push('A senha é obrigatória.');
    if (password !== confirmPassword) errors.push('As senhas não coincidem.');
    if (!validateCPF(cpf)) errors.push('CPF inválido.');
    if (dob === '') errors.push('A data de nascimento é obrigatória.');
    if (telefone.length < 10) errors.push('Número de telefone incompleto.');
    if (gender === '') errors.push('Selecione um gênero.');

    // Exibe os erros
    if (errors.length > 0) {
        alert(errors.join('\n'));
        return;
    }

    // Submete o formulário se tudo estiver correto
    alert('Cadastro realizado com sucesso!');
});

// Função para validar o formato do email
function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

// Função para validar o CPF (exemplo básico)
function validateCPF(cpf) {
    cpf = cpf.replace(/\D/g, ''); // Remove qualquer coisa que não seja dígito
    if (cpf.length !== 11) return false;

    // Validação básica de CPF
    let sum = 0;
    let remainder;
    for (let i = 1; i <= 9; i++) sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    remainder = (sum * 10) % 11;
    if (remainder === 10 || remainder === 11) remainder = 0;
    if (remainder !== parseInt(cpf.substring(9, 10))) return false;

    sum = 0;
    for (let i = 1; i <= 10; i++) sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    remainder = (sum * 10) % 11;
    if (remainder === 10 || remainder === 11) remainder = 0;
    if (remainder !== parseInt(cpf.substring(10, 11))) return false;

    return true;
}

// Aplicar máscara ao campo CPF enquanto o usuário digita
document.getElementById('cpf').addEventListener('input', function (e) {
    let value = e.target.value;
    value = value.replace(/\D/g, '') // Remove caracteres não numéricos
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após os primeiros 3 dígitos
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após os próximos 3 dígitos
        .replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona traço antes dos últimos 2 dígitos
    e.target.value = value;
});

document.getElementById('telefone').addEventListener('input', function (e) {
    let value = e.target.value;

    // Remove tudo que não for número
    value = value.replace(/\D/g, '');

    // Limita a quantidade de dígitos em 11 (DDD + 9 dígitos)
    if (value.length > 11) {
        value = value.substring(0, 11);
    }

    // Adiciona a máscara (XX) XXXXX-XXXX
    if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
    }
    if (value.length > 7) {
        value = value.replace(/(\d{5})(\d)/, '$1-$2');
    }

    e.target.value = value;
});
