# 🌱  Aproxima+

**Conectando pessoas e causas que transformam o mundo.**

O ** Aproxima+** é uma plataforma desenvolvida para conectar **ONGs**, **doadores** e **voluntários**, tornando o processo de doação e apoio a causas sociais mais simples e acessível. O objetivo do projeto é **facilitar a solidariedade**, centralizando informações sobre organizações e permitindo que cada pessoa escolha como quer ajudar — seja com tempo, recursos ou conhecimento.

---

## 🚀 Tecnologias Utilizadas

O projeto foi desenvolvido com o **framework Laravel**, utilizando uma arquitetura moderna e escalável.

**Principais Tecnologias:**

* **PHP 8+** com **Laravel 11**
* **MySQL** para o banco de dados relacional
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
INSERT INTO Ajuda (nome, descricao)
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
git clone https://github.com/seu-usuario/doafacil.git
cd doafacil
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

## 🤝 Contribuição

Sinta-se à vontade para contribuir com o projeto! Envie **pull requests** com melhorias, correções ou novas funcionalidades. Abra issues para reportar bugs ou sugerir features.

---

