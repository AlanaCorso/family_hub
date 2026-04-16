# FamiliaHub - Gerenciamento de Rotinas Familiares

Um sistema web completo para gerenciar atividades, membros e rotinas da família com interface moderna, temas dinâmicos e gamificação.

## 🚀 Tecnologias

- **Front-end**: HTML5, CSS3, JavaScript Vanilla
- **Back-end**: PHP 7.4+
- **Banco de Dados**: MySQL 5.7+
- **Servidor**: Apache/Nginx com suporte a PHP

## 📋 Funcionalidades

✅ Autenticação de usuários (Login/Registro)
✅ Gerenciamento de membros da família
✅ CRUD completo de atividades
✅ Temas dinâmicos por membro (6 cores)
✅ Calendário mensal/semanal
✅ Sistema de gamificação (ranking, pontos, conquistas)
✅ Relatórios com gráficos
✅ Notificações
✅ Interface responsiva

## 🔧 Instalação

### Pré-requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Apache/Nginx com mod_rewrite ativado

### Passos

1. **Clonar/Extrair o projeto**
```bash
cd /var/www/html
# Copiar os arquivos do projeto para este diretório
```

2. **Configurar o banco de dados**
```bash
# Editar includes/config.php com suas credenciais MySQL
nano includes/config.php
```

3. **Criar o banco de dados**
```bash
mysql -u root -p < database.sql
```

4. **Configurar permissões**
```bash
chmod -R 755 /var/www/html/familia-hub-php
chmod -R 777 /var/www/html/familia-hub-php/uploads
```

5. **Acessar a aplicação**
```
http://localhost/familia-hub-php/login.html
```

## 📁 Estrutura de Pastas

```
familia-hub-php/
├── api/                    # APIs PHP
│   ├── auth.php           # Autenticação
│   ├── members.php        # Membros
│   ├── activities.php     # Atividades
│   └── gamification.php   # Gamificação
├── assets/                # Recursos estáticos
│   ├── css/
│   │   └── style.css      # CSS global
│   ├── js/
│   │   └── app.js         # JavaScript principal
│   └── images/            # Imagens
├── includes/
│   └── config.php         # Configuração do banco
├── pages/                 # Páginas HTML
│   ├── members.html
│   ├── activities.html
│   ├── calendar.html
│   ├── gamification.html
│   └── reports.html
├── uploads/               # Uploads de usuários
├── index.html             # Dashboard
├── login.html             # Login/Registro
└── README.md
```

## 🗄️ Banco de Dados

O banco de dados é criado automaticamente na primeira execução. As tabelas incluem:

- **users**: Usuários do sistema
- **family_members**: Membros da família
- **activities**: Atividades/tarefas
- **achievements**: Conquistas desbloqueadas
- **notifications**: Notificações

## 🎨 Temas Disponíveis

- 🔵 Azul (#3b82f6)
- 🟣 Roxo (#8b5cf6)
- 🟢 Verde (#22c55e)
- ⚫ Escuro (#1f2937)
- 🟠 Laranja (#f97316)
- 🩷 Rosa (#ec4899)

## 📱 Responsividade

A aplicação é totalmente responsiva e funciona em:
- Desktop (1920px+)
- Tablet (768px - 1024px)
- Mobile (até 767px)

## 🔐 Segurança

- Senhas com hash bcrypt
- Validação de entrada em todas as APIs
- Proteção contra SQL Injection
- Sessões seguras
- CORS configurado

## 🚀 Deployment

### Heroku
```bash
git push heroku main
```

### DigitalOcean/AWS
1. Fazer upload dos arquivos via SFTP
2. Configurar banco de dados
3. Atualizar includes/config.php
4. Acessar via domínio

## 📝 Uso

### Login
1. Acesse `login.html`
2. Registre uma nova conta ou faça login
3. Será redirecionado para o dashboard

### Adicionar Membro
1. Vá para "Membros"
2. Clique em "+ Adicionar Membro"
3. Preencha os dados e selecione um tema
4. Clique em "Salvar"

### Criar Atividade
1. Vá para "Atividades"
2. Clique em "+ Nova Atividade"
3. Selecione o membro responsável
4. Preencha título, tipo, prioridade e data
5. Clique em "Salvar"

### Ver Relatórios
1. Vá para "Relatórios"
2. Visualize gráficos de atividades, pontos e status

## 🐛 Troubleshooting

### Erro de conexão com banco de dados
- Verificar credenciais em `includes/config.php`
- Verificar se MySQL está rodando
- Verificar permissões do usuário MySQL

### Erro 404 em APIs
- Verificar se o servidor está com mod_rewrite ativado
- Verificar estrutura de pastas
- Verificar permissões de arquivo

### Sessão expirada
- Aumentar `session.gc_maxlifetime` em php.ini
- Verificar cookies do navegador

## 📞 Suporte

Para dúvidas ou problemas, consulte a documentação ou entre em contato.

## 📄 Licença

MIT License - Sinta-se livre para usar e modificar!

---

Desenvolvido com ❤️ para sua família
