# 📰 Atividade Prática — Perfil de Usuário com Banco de Dados

## 📌 Informações do Projeto

| Item | Detalhes |
| :--- | :--- |
| **Autora** | Maria Eduarda Vieira |
| **Matéria** | Programação Backend |
| **Instituição** | SENAI — Curso Técnico em Desenvolvimento de Sistemas |
| **Data de Início** | 06/10/2026 |
| **Data de Término** | 19/10/2026 |

---

## 🎯 Sobre a Atividade

Esta atividade teve como objetivo o desenvolvimento de um sistema de login e perfil de usuário utilizando **PHP** integrado a um banco de dados **MySQL**. O foco principal foi praticar a verificação de credenciais no banco de dados, o gerenciamento de sessões de usuário e a personalização da interface com base nas preferências selecionadas durante o acesso.

---

## 🚀 Objetivos Principais

- Criar um fluxo seguro de autenticação consultando dados na tabela `usuarios` do banco `exercicio`.
- Utilizar **variáveis de sessão (`$_SESSION`)** para manter o usuário autenticado entre as páginas.
- Implementar a personalização dinâmica da cor de fundo da página de perfil de acordo com a escolha feita no login.
- Garantir a proteção de páginas restritas, redirecionando usuários não autenticados de volta para a tela de login.
- Desenvolver o mecanismo de encerramento de sessão (**logout**) com destruição segura dos dados salvos.

---

## 🛠️ Ferramentas Utilizadas

- **PHP**: Linguagem backend para manipulação da lógica de autenticação, sessões e personalização (`15d_login.php`, `15d_perfil.php`, `15d_logout.php`).
- **MySQL / phpMyAdmin**: Banco de dados relacional (`exercicio`) utilizado para armazenamento e consulta dos usuários cadastrados.
- **Visual Studio Code**: Editor de código utilizado para o desenvolvimento da aplicação.

---

## 💡 Como me auxiliou

A prática me permitiu consolidar os conceitos fundamentais do desenvolvimento backend com PHP, especialmente a integração com bancos de dados relacionais e o controle de acesso via sessões (`session_start()`). Aprendi a lidar com o redirecionamento seguro de páginas e a manipulação dinâmica de estilos CSS a partir de dados enviados por formulários HTML, reforçando a importância da validação de dados e do gerenciamento correto da experiência do usuário após a autenticação.
