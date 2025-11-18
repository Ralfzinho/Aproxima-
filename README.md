# 🌱  Aproxima+

**Conectando pessoas e causas que transformam o mundo.**

O ** Aproxima+** é uma plataforma desenvolvida para conectar **ONGs**, **doadores** e **voluntários**, tornando o processo de doação e apoio a causas sociais mais simples e acessível. O objetivo do projeto é **facilitar a solidariedade**, centralizando informações sobre organizações e permitindo que cada pessoa escolha como quer ajudar — seja com tempo, recursos ou conhecimento.

---

## 🚀 Tecnologias Utilizadas

O projeto foi desenvolvido com o **framework Laravel**, utilizando uma arquitetura moderna e escalável.

**Principais Tecnologias:**

* **PHP 8+** com **Laravel 11**
* **PostGreSQL** para o banco de dados relacional
* **Blade** para renderização de templates
* **HTML5, CSS3 e JavaScript** para o front-end
* **Tailwind CSS** para estilo responsivo
* **Composer** para gerenciamento de dependências
* **Node.js / npm** para assets
* **GitHub** para controle de versão

---

## 🗃️ Estrutura do Banco de Dados

O sistema possui as principais entidades:

* **Usuário:** cadastra-se para realizar doações ou oferecer ajuda.
* **ONG:** representa organizações que recebem ajuda ou doações.
* **Ajuda:** define os tipos de ajuda disponíveis (ex: voluntariado, doação de alimentos, apoio técnico).
* **Causa:** representa os temas sociais apoiados (ex: educação, meio ambiente, saúde).
* **Relacionamentos:**

  * `Usuário ↔ ONG` → N:N  (via `InteresseUsuario`)
  * `ONG ↔ Causa` → N:N  (via `OngCausa`)
  * `TipoAjuda → ONG` → 1:N (cada ONG tem um tipo principal, pode ter vários tipos associados)

---

## 📦 Exemplo de Inserts

### Tabela `ajudas`

```sql
INSERT INTO Ajudas (nome, descricao)
VALUES
('Voluntariado', 'Apoio presencial ou remoto em atividades das ONGs'),
('Doação Financeira', 'Contribuição monetária para apoio a projetos sociais'),
('Doação de Alimentos', 'Arrecadação e entrega de alimentos não perecíveis'),
('Doação de Roupas', 'Recolhimento e repasse de roupas para famílias carentes'),
('Doação de Materiais Escolares', 'Fornecimento de materiais para crianças e jovens'),
('Doação de Equipamentos', 'Doação de equipamentos eletrônicos ou de infraestrutura'),
('Mentoria', 'Orientação profissional e educacional para beneficiários'),
('Serviços Profissionais', 'Atuação voluntária em áreas específicas (ex: saúde, direito)'),
('Apoio Jurídico', 'Aconselhamento e suporte legal para ONGs'),
('Apoio Psicológico', 'Atendimento ou escuta especializada para beneficiários'),
('Aulas e Oficinas Educacionais', 'Promoção de atividades de ensino e capacitação'),
('Apoio Técnico (TI, Marketing, Design)', 'Contribuições em tecnologia e comunicação'),
('Divulgação e Comunicação', 'Auxílio na promoção de campanhas e eventos'),
('Apoio Logístico e Transporte', 'Transporte de doações e apoio em eventos'),
('Campanhas de Arrecadação', 'Organização de campanhas de doação'),
('Organização de Eventos', 'Planejamento e execução de eventos beneficentes'),
('Captação de Recursos', 'Atividades voltadas à obtenção de fundos'),
('Consultoria Administrativa', 'Apoio em gestão e processos organizacionais'),
('Adoção de Animais', 'Promoção de adoções e apoio a abrigos'),
('Apoio em Projetos Ambientais', 'Atuação em iniciativas ecológicas e sustentáveis');
```

---

### Tabela `causas`

```sql
INSERT INTO Causas (nome, descricao)
VALUES
('Educação', 'Projetos que promovem acesso à educação de qualidade'),
('Saúde', 'Iniciativas voltadas à saúde física e mental'),
('Meio Ambiente', 'Ações de preservação ambiental e sustentabilidade'),
('Direitos Humanos', 'Defesa da igualdade, justiça e cidadania'),
('Animais', 'Proteção e adoção de animais em situação de risco'),
('Combate à Fome', 'Iniciativas de distribuição de alimentos'),
('Inclusão Social', 'Projetos de acessibilidade e igualdade social'),
('Cultura e Arte', 'Promoção da cultura local e expressões artísticas'),
('Empreendedorismo Social', 'Iniciativas de geração de renda e emprego'),
('Esporte e Lazer', 'Projetos esportivos e recreativos para comunidades'),
('Habitação', 'Construção e reforma de moradias para famílias carentes'),
('Apoio Psicológico', 'Atendimento e suporte emocional para vulneráveis'),
('Tecnologia e Inovação', 'Projetos que usam tecnologia para impacto social'),
('Direitos das Crianças', 'Proteção e desenvolvimento infantil'),
('Idosos', 'Cuidado e inclusão de pessoas da terceira idade'),
('Mulheres', 'Iniciativas de empoderamento feminino'),
('Refugiados e Migrantes', 'Apoio a pessoas deslocadas'),
('LGBTQIA+', 'Projetos de inclusão e combate à discriminação'),
('Deficientes', 'Ações voltadas à inclusão e acessibilidade'),
('Desenvolvimento Comunitário', 'Projetos para melhoria de comunidades locais');
```

---

## ⚙️ Como Executar o Projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/Ralfzinho/Aproxima-
cd aproxima
```

### 2. Instalar Dependências

```bash
composer install
npm install
```

### 3. Configurar o Ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o arquivo `.env` com suas configurações de banco de dados (DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.).

### 4. Rodar Migrações e Seeds

```bash
php artisan migrate --seed
```

### 5. Iniciar o Servidor

```bash
php artisan serve
```

Acesse: [http://localhost:8000](http://localhost:8000)

---



# Documentação técnica do Aproxima+

## Arquitetura Laravel
- **Rotas**: `routes/web.php` organiza páginas públicas (`/`, `/como-funciona`, `/ongs`), fluxos autenticados (`/inicio`, `/admin`) e CRUDs de causas/ajudas via `Route::resource`. As rotas de cadastro usam controladores dedicados para voluntários e ONGs. 
- **Controle**: controladores em `app/Http/Controllers` encapsulam regras de negócio e retornam views Blade.
- **Modelos**: `app/Models` define validações estáticas, casts e relacionamentos N:N para pivot tables (`interesse_usuario`, `ong_causa`, `ong_ajuda`).
- **Views/Front-end**: páginas Blade em `resources/views` usam Tailwind e assets estáticos de `public/css` e `public/js`. Formulários principais são multi-etapas para voluntários e ONGs.

## Rotas e navegação
- **Públicas**: home e páginas institucionais (`/como-funciona`, `/ongs`, `/infocausas`) são carregadas direto por `Route::view`.
- **Autenticadas**: `/inicio` e `/admin` exigem `auth` e, no caso de `/inicio`, estando autenticado. Há atalhos para páginas Livewire de perfil, senha e aparência em `/settings/*`.
- **CRUDs administrativos**: `Route::resource('ajudas', ...)` e `Route::resource('causas', ...)` expõem listagem, criação, edição e exclusão de tipos de ajuda e causas.
- **Cadastros**: voluntários acessam `/cadastro_voluntario` e ONGs `/cadastro_ong`; ambos enviam POST para salvar registros e redirecionar ao início.

## Controladores e fluxos principais
- **AjudaController**: pagina a lista de ajudas, aplica validação de unicidade, cria, edita e exclui registros com feedback de sucesso/erro via redirects. Views dedicadas em `resources/views/ajudas/*` recebem os dados paginados.
- **CausaController**: idêntico ao fluxo de ajudas, mantendo CRUD completo para causas.
- **VoluntarioController**: carrega causas para popular o checklist do formulário, valida a entrada via `User::validateVoluntario`, cria o usuário com `User::createVoluntario` e autentica com `Auth::login` antes de redirecionar ao dashboard.
- **OngController**: traz a lista de causas, delega validação a `Ong::validateCadastro` e cria registros com `Ong::createCadastro`, retornando ao início com mensagem de sucesso.

## Modelos e regras de negócio
- **User**: define constantes de disponibilidade e experiência, esconde senha, faz cast de datas e provê relacionamento N:N com causas (pivot `interesse_usuario`). As funções `validateVoluntario` e `createVoluntario` centralizam regras e criação do voluntário, incluindo sincronização de causas.
- **Ong**: configura listas permitidas de tipos de voluntariado, frequências e UFs, faz cast do JSON de tipos e define relacionamento N:N com causas (`ong_causa`). As funções `validateCadastro` e `createCadastro` aplicam regras (senha confirmada, CNPJ de 14 dígitos, seleção mínima de causas), sanitizam os dados (hash de senha, limpeza do CNPJ), e sincronizam o pivot.
- **Causa/Ajuda**: modelos simples com `fillable` para nome/descrição, usados pelos CRUDs e por pivots (`interesse_usuario`, `ong_ajuda`, `ong_causa`).

## Banco de dados
- **Causas e ajudas**: tabelas com `nome`, `descricao` e timestamps, criadas pelas migrações `2025_08_19_235317_create_causas_table` e `2025_08_19_235318_create_ajudas_table`.
- **ONGs**: tabela rica com campos de contato, endereço, operação e preferências; inclui JSONB `volunteer_types`, enum `frequency`, índices de estado/cidade e várias `CHECK` constraints para UF, CNPJ e ano de fundação.
- **Pivots e interesses**: `interesse_usuario` vincula usuários a causas com unicidade e timestamp de interesse; `ong_causa` relaciona ONGs a causas; `ong_ajuda` mapeia ONGs aos tipos de ajuda, todas com exclusão em cascata.

## Views e front-end
- **Cadastro de voluntário**: formulário multi-etapas em `resources/views/cadastro_voluntario.blade.php` coleta dados pessoais, causas de interesse, disponibilidade, experiência, perfil profissional e credenciais. Usa Tailwind, validação de backend, barra de progresso e navegação entre passos via JS.
- **Listagens administrativas**: `resources/views/ajudas/index.blade.php` exibe cards com totais, filtros básicos, ações de editar/excluir com SweetAlert e paginação padrão do Laravel. O layout compartilha `partials.header` e `partials.sidebar`.

## Execução e ambiente
- Dependências são instaladas com `composer install` e `npm install`; a configuração usa `.env` e `php artisan key:generate`. Migrações e seeds são aplicados com `php artisan migrate --seed`, e o servidor roda em `php artisan serve`.

---
## 🤝 Contribuição

Sinta-se à vontade para contribuir com o projeto! Envie **pull requests** com melhorias, correções ou novas funcionalidades. Abra issues para reportar bugs ou sugerir features.

---
