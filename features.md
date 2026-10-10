# ZOOVA — Especificação de Funcionalidades

> **Projeto escolar de final de módulo**  
> **Tecnologias:** PHP, MySQL, HTML, CSS e JavaScript  
> **Objetivo:** Criar uma plataforma web completa para um zoológico, com catálogo de animais, contas de utilizador, compra e validação de bilhetes e um painel de administração.

---

## 1. Tipos de Utilizador e Permissões

O sistema tem apenas dois tipos de utilizador: **visitante/utilizador** e **administrador**. Não existe qualquer papel ou conta de funcionário.

### Visitante (sem sessão iniciada)
- Ver a página inicial e informações do zoológico.
- Consultar o índice de animais, pesquisar e filtrar.
- Ver fichas individuais dos animais.
- Consultar horários, preços, localização e regras de visita.
- Criar conta e iniciar sessão.
- Iniciar o processo de compra de bilhetes; a compra exige autenticação.

### Utilizador Registado
- Todas as funcionalidades de visitante.
- Editar o perfil e alterar a palavra-passe.
- Adicionar/remover animais dos favoritos.
- Consultar o histórico e o estado dos bilhetes comprados.
- Consultar os detalhes de cada bilhete e mostrar o respetivo PIN/QR Code.
- Atualizar dados pessoais e preferências.
- Pedir a eliminação da conta, respeitando os registos que tenham de ser conservados legalmente.

### Administrador
- Aceder ao painel `/admin`.
- Validar bilhetes por PIN ou QR Code na entrada.
- Gerir animais, categorias, habitats, utilizadores, bilhetes, encomendas e conteúdos do site.
- Criar, editar, publicar, arquivar e eliminar registos, conforme necessário.
- Gerir preços, horários, lotação e regras de bilhetes.
- Consultar estatísticas, relatórios e registos de atividade.
- Gerir notícias, eventos, configurações e avisos do site.

*Nota:* Não existe um papel de funcionário. Todas as funções de gestão e validação de bilhetes pertencem exclusivamente ao administrador. O PHP deve verificar a sessão e a função administrativa em cada pedido protegido.

---

## 2. Páginas Públicas

### Página Inicial
- Cabeçalho com logótipo, navegação e estado de sessão.
- Imagem principal e apresentação do zoológico.
- Botões para explorar animais e comprar bilhetes.
- Animais em destaque.
- Informações rápidas: horários, preços e localização.
- Avisos sobre encerramentos, eventos ou alterações de horário.
- Secção de novidades e eventos.
- Rodapé com contactos, mapa e ligações úteis.

### Sobre o Zoológico
- História e missão do zoológico.
- Mapa/localização e instruções para chegar.
- Horários por dia e feriados.
- Preçário e condições de entrada.
- Acessibilidade, regras de visita e perguntas frequentes.
- Contactos e formulário de contacto.

### Índice de Animais
- Grelha de cartões com fotografia, nome, nome científico e categoria.
- Pesquisa por nome comum ou científico.
- Filtros por espécie/grupo, habitat, continente de origem, dieta e estado de conservação.
- Ordenação alfabética e por popularidade.
- Paginação para catálogos grandes.
- Página individual para cada animal.
- Favoritos visíveis para utilizadores autenticados.
- Etiquetas como “Em destaque”, “Novo” ou “Não disponível para visita”, quando aplicável.

### Ficha de Cada Animal
- Nome comum e nome científico.
- Fotografias autorizadas.
- Descrição e curiosidades.
- Habitat natural e distribuição geográfica.
- Dieta, longevidade, peso e dimensões aproximadas.
- Estado de conservação e fonte da informação.
- Categoria, localização no zoológico e mapa/recinto.
- Botão de favorito.
- Animais relacionados.
- Data da última atualização da ficha.

### Notícias e Eventos
- Lista de notícias, atividades educativas e eventos.
- Página de detalhe com data, descrição e imagens.
- Filtros por categoria e data.
- Eventos futuros em destaque.
- Inscrição em eventos, caso essa funcionalidade seja implementada.

---

## 3. Conta, Autenticação e Perfil

### Registo
- Nome, email e palavra-passe.
- Confirmação da palavra-passe no formulário.
- Verificação de email (opcional, se houver serviço de envio configurado).
- Aceitação da política de privacidade e termos.
- Validação no servidor e mensagens de erro claras.

### Login e Logout
- Login com email e palavra-passe.
- Logout seguro.
- Mensagem genérica para credenciais inválidas.
- Limitação de tentativas para reduzir ataques de força bruta.
- Recuperação de palavra-passe por link/token de utilização única (opcional).
- Regeneração do ID da sessão após login.

### Perfil
- Nome, email e data de registo.
- Fotografia de perfil opcional.
- Alteração de dados pessoais.
- Alteração de palavra-passe mediante confirmação da palavra-passe atual.
- Lista de animais favoritos.
- Histórico de compras e bilhetes.
- Preferências de comunicação.
- Pedido de eliminação da conta.

### Segurança de Autenticação
- Guardar palavras-passe com `password_hash()` e verificar com `password_verify()`.
- Usar sessões PHP seguras.
- Usar consultas preparadas `PDO` ou `MySQLi`.
- Validar todos os dados no servidor.
- Proteger formulários contra CSRF.
- Escapar conteúdo apresentado em HTML para reduzir XSS.
- Não guardar palavras-passe em texto simples.

---

## 4. Favoritos de Animais
- Adicionar um animal aos favoritos.
- Remover um animal dos favoritos.
- Mostrar o total de favoritos de cada utilizador.
- Página “Os meus favoritos” no perfil.
- Atualização sem recarregar a página com `fetch()`/AJAX (opcional).
- Impedir favoritos duplicados na base de dados.
- Mostrar um contador de favoritos por animal, se fizer sentido.
- Se existir um contador público de likes, não o usar como prova de qualidade ou estado de conservação.

---

## 5. Bilhetes e Compras

### Tipos de Bilhete
- Adulto.
- Criança.
- Sénior/estudante, se o zoológico fictício definir estas categorias.
- Família ou grupo.
- Bilhete gratuito ou desconto especial, se aplicável.
- Preços e regras configuráveis pelo administrador.

### Processo de Compra
1. O utilizador escolhe a data da visita.
2. Seleciona os tipos e quantidades de bilhetes.
3. O sistema calcula o subtotal, descontos permitidos e total.
4. O utilizador confirma os dados da encomenda.
5. O sistema cria a encomenda e os bilhetes associados.
6. Após pagamento confirmado, os bilhetes ficam disponíveis no perfil.
7. Cada bilhete recebe um código único e difícil de adivinhar.
8. O utilizador pode consultar os bilhetes, imprimir ou apresentar o QR Code na entrada.

### Pagamento Verdadeiro
- Para cobrar dinheiro real, integrar um prestador de pagamentos, por exemplo Stripe ou outro serviço adequado à entidade responsável pelo projeto.
- Não guardar dados de cartões bancários na base de dados.
- Confirmar o pagamento no servidor através de webhooks assinados do prestador.
- Não marcar uma encomenda como paga apenas porque o navegador regressou à página de sucesso.
- Em desenvolvimento escolar, usar o modo de teste do prestador. Para pagamentos reais, são necessárias configuração, conta elegível e validação dos requisitos legais e do prestador.
- Guardar referência do pagamento, estado, montante, moeda e datas; não guardar dados completos do cartão.

### PIN/Código e QR Code
- Gerar um código único por bilhete com entropia suficiente, não sequencial e impossível de prever facilmente.
- Guardar o código de forma segura; evitar expô-lo em URLs públicas ou logs.
- O QR Code deve conter apenas o identificador/token necessário, não dados pessoais.
- Mostrar o código, QR Code, tipo de bilhete, data de visita e estado.
- Permitir reenvio do comprovativo por email, caso exista envio de email configurado.
- Prever cancelamento e reembolso segundo as regras definidas.

### Estados de Encomendas e Bilhetes
- **Encomenda:** pendente, paga, falhada, cancelada, reembolsada.
- **Bilhete:** válido, utilizado, cancelado, expirado.
- Registar a data de validade e as condições de utilização.
- Definir claramente se um bilhete é válido apenas num dia ou durante um período.

### Histórico e Comprovativo
- Lista de encomendas do utilizador.
- Detalhe da encomenda e dos bilhetes.
- Comprovativo de compra imprimível.
- Registo de pagamentos e reembolsos.
- Exportação/recibo apenas se implementada de acordo com os requisitos legais aplicáveis.

---

## 6. Validação de Bilhetes — Exclusiva do Administrador

A validação é feita numa página dedicada, por exemplo `/admin/validar-bilhete`, acessível apenas a contas com papel de administrador.

### Validação Manual por PIN
1. O administrador introduz o PIN.
2. O servidor procura o bilhete na base de dados.
3. Verifica se existe, está pago, não foi cancelado, não expirou e corresponde à data/regras da visita.
4. Se estiver válido, mostra um resultado claro.
5. O administrador confirma a entrada.
6. O sistema marca o bilhete como utilizado e regista a data/hora e o administrador responsável.

### Leitura por QR Code
- Usar a câmara do dispositivo, se o browser permitir.
- Alternativa manual por PIN caso a câmara não esteja disponível.
- Pedir permissão para usar a câmara e explicar o motivo.
- Não confiar na informação contida no QR Code: validar sempre no servidor.

### Evitar Reutilização
- Um bilhete não pode ser utilizado duas vezes.
- Fazer a validação e a alteração de estado numa transação SQL.
- Usar bloqueio/atualização condicional para evitar que duas entradas simultâneas validem o mesmo bilhete.
- Guardar um registo de auditoria: bilhete, administrador, data/hora e resultado.
- Mostrar mensagens como “Válido — confirmar entrada”, “Já utilizado”, “Cancelado”, “Pagamento pendente” ou “Data inválida”.

---

## 7. Painel de Administração — `/admin`

### Dashboard
- Total de bilhetes vendidos.
- Vendas por dia, semana, mês e ano.
- Receita por período, distinguindo valores pagos de encomendas pendentes/reembolsadas.
- Número de utilizadores registados.
- Animais publicados e arquivados.
- Bilhetes válidos, utilizados, cancelados e expirados.
- Eventos futuros.
- Gráficos e filtros por intervalo de datas.

### Gestão de Animais
- Criar, editar, publicar, arquivar e eliminar animais.
- Carregar e gerir fotografias.
- Associar categoria, habitat, dieta e estado de conservação.
- Validar campos obrigatórios.
- Pesquisa, filtros e paginação.
- Pré-visualizar a ficha antes de publicar.
- Guardar data de criação e última atualização.

### Gestão de Categorias e Habitats
- Criar e editar categorias de animais.
- Gerir habitats/recintos e localização no mapa do zoológico.
- Associar vários animais a categorias ou habitats conforme o modelo de dados.
- Impedir a eliminação de registos que ainda estejam associados, ou definir uma estratégia de arquivo.

### Gestão de Bilhetes e Encomendas
- Pesquisar por PIN, número de encomenda ou utilizador.
- Consultar estado e detalhes da compra.
- Cancelar bilhetes com registo do motivo e responsável.
- Consultar estado do pagamento no prestador.
- Processar reembolsos através do prestador, se suportado e autorizado.
- Exportar relatórios CSV para uso administrativo.
- Não permitir alterar manualmente o estado para “pago” sem uma confirmação fiável.

### Gestão de Utilizadores
- Pesquisar e consultar contas.
- Suspender/desbloquear contas com motivo registado.
- Consultar histórico de compras e atividade quando necessário.
- Eliminar ou anonimizar dados quando permitido e adequado.
- Registar ações sensíveis no histórico de atividade.

### Gestão de Conteúdo e Configurações
- Editar horários, preços, contactos e regras de visita.
- Gerir notícias e eventos.
- Publicar avisos na página inicial.
- Configurar datas indisponíveis e lotação diária, se existir limite de visitantes.
- Gerir perguntas frequentes.
- Configurar textos de email e política de cancelamento.

---

## 8. Funcionalidades Extra Recomendadas

### Prioridade Alta
1. **Mapa interativo do zoológico:** recintos, casas de banho, restauração, entradas e acessibilidade.
2. **Lotação por dia:** limitar vendas por data e impedir compras acima da capacidade configurada.
3. **Pesquisa avançada com filtros combinados:** animais, habitats, dieta e conservação.
4. **QR Code nos bilhetes:** validação rápida, com PIN como alternativa.
5. **Dashboard com gráficos:** vendas, entradas validadas e animais mais consultados.
6. **Histórico de auditoria:** registar ações importantes do administrador.
7. **Paginação e pesquisa no painel:** essencial quando houver muitos registos.
8. **Design responsivo e acessível:** funcionar em telemóvel, tablet e computador.

### Prioridade Média
9. Sistema de notícias e eventos com inscrições.
10. Quiz educativo sobre animais, com pontuação e resultados no perfil.
11. Passaporte digital do visitante: guardar animais/recintos visitados através de interações no site.
12. Sistema de conquistas: emblemas por favoritos, quizzes ou visitas registadas.
13. Recomendações de animais com base nos favoritos e categorias consultadas.
14. Newsletter com consentimento e opção de cancelamento.
15. Avaliação da visita após uma visita validada, com moderação.
16. Modo de alto contraste e ajuste do tamanho do texto.
17. Página de conservação: projetos de proteção, espécies ameaçadas e fontes credíveis.
18. Notificações no site para compras, alterações de eventos ou avisos relevantes.

### Funcionalidades Avançadas
19. Emails transacionais: confirmação de compra, bilhetes e cancelamentos.
20. Relatórios exportáveis em CSV.
21. Registo de alterações: comparar valores antigos e novos em ações administrativas.
22. Gestão de campanhas e descontos com datas, limites e regras.
23. Vários bilhetes por encomenda, cada um com código próprio.
24. Reembolso parcial ou total, com estados sincronizados com o prestador de pagamentos.
25. API interna em PHP para consultar animais e bilhetes, com autenticação e validação.
26. Testes automatizados para login, favoritos, compra e validação.
27. Ambiente de demonstração com dados fictícios e pagamentos em modo de teste.
28. Registo de erros e monitorização sem guardar palavras-passe, tokens ou dados bancários.

---

## 9. Base de Dados MySQL — Proposta Inicial

| Tabela | Finalidade e Campos Principais |
| :--- | :--- |
| `users` | `id`, `name`, `email` (único), `password_hash`, `role`, `status`, `created_at` |
| `animals` | `id`, `name`, `scientific_name`, `description`, `habitat_id`, `category_id`, `diet`, `weight`, `lifespan`, `conservation_status`, `image`, `is_published`, `created_at`, `updated_at` |
| `animal_categories` | `id`, `name`, `description` |
| `habitats` | `id`, `name`, `description`, `map_x`, `map_y`, `is_accessible` |
| `animal_favorites` | `user_id`, `animal_id`, `created_at` (chave única composta) |
| `ticket_types` | `id`, `name`, `description`, `price`, `is_active` |
| `orders` | `id`, `user_id`, `total_amount`, `currency`, `status`, `payment_provider`, `payment_reference`, `created_at`, `paid_at` |
| `order_items` | `id`, `order_id`, `ticket_type_id`, `quantity`, `unit_price`, `subtotal` |
| `tickets` | `id`, `order_item_id`, `code_hash` ou token seguro, `visit_date`, `status`, `used_at`, `validated_by`, `created_at` |
| `ticket_scans` | `id`, `ticket_id`, `admin_user_id`, `result`, `scanned_at`, `notes` |
| `payments` | `id`, `order_id`, `provider`, `provider_payment_id`, `amount`, `currency`, `status`, `created_at`, `updated_at` |
| `refunds` | `id`, `payment_id`, `amount`, `reason`, `status`, `provider_refund_id`, `created_at` |
| `news` | `id`, `author_id`, `title`, `slug`, `content`, `image`, `status`, `published_at` |
| `events` | `id`, `title`, `description`, `starts_at`, `ends_at`, `capacity`, `status` |
| `event_registrations` | `id`, `event_id`, `user_id`, `status`, `created_at` |
| `site_settings` | `id`, `setting_key`, `setting_value`, `updated_by`, `updated_at` |
| `audit_logs` | `id`, `user_id`, `action`, `entity_type`, `entity_id`, `details`, `created_at` |

### Notas de Modelação
- Usar `DECIMAL` para montantes monetários, nunca `FLOAT`.
- Usar `DATETIME`/`TIMESTAMP` para datas e horas.
- Definir índices para email, código do bilhete, estados e datas pesquisadas frequentemente.
- Impor unicidade no email e no código/token do bilhete.
- Guardar preços históricos em `order_items.unit_price`, para que alterações futuras aos preços não alterem compras antigas.
- A tabela `tickets` deve ter um registo individual por entrada, mesmo quando o cliente compra vários bilhetes.
- A tabela `ticket_scans` guarda tentativas de validação, incluindo as recusadas.
- Definir cuidadosamente `ON DELETE`, preferindo arquivar ou anonimizar registos ligados a compras em vez de apagar histórico financeiro necessário.

---

## 10. Organização Sugerida do Projeto PHP

```text
zoova/
├── public/
│   ├── index.php
│   ├── animais.php
│   ├── animal.php
│   ├── bilhetes.php
│   ├── comprar.php
│   ├── perfil.php
│   ├── login.php
│   ├── registo.php
│   ├── logout.php
│   └── assets/
│       ├── css/
│       ├── js/
│       └── images/
├── admin/
│   ├── index.php
│   ├── animais/
│   ├── categorias/
│   ├── habitats/
│   ├── bilhetes/
│   ├── utilizadores/
│   ├── eventos/
│   └── validar-bilhete.php
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   ├── Middleware/
│   └── Views/
├── config/
│   └── database.php
├── storage/
│   └── uploads/
├── tests/
└── README.md
```

---

## 11. Requisitos de Qualidade

### Segurança
- PDO com prepared statements.
- Validação no servidor, mesmo que também exista validação JavaScript.
- `password_hash()` / `password_verify()`.
- Proteção CSRF e escape de saída HTML.
- Controlo de permissões em todas as páginas e ações.
- Tokens aleatórios e validação de pagamento no servidor.
- Rate limiting para login, recuperação de palavra-passe e tentativas de PIN.
- Registos de auditoria sem dados secretos.
- Backups da base de dados e configuração fora do diretório público.

### Usabilidade e Acessibilidade
- Layout responsivo.
- Navegação consistente e mensagens de erro úteis.
- Formulários com labels e indicação dos campos obrigatórios.
- Contraste adequado, navegação por teclado e texto alternativo nas imagens.
- Estados visuais claros para bilhetes válidos, utilizados ou cancelados.
- Confirmação antes de operações destrutivas.

### Desempenho e Manutenção
- Paginação em listas longas.
- Índices MySQL nas colunas pesquisadas.
- Código dividido em ficheiros e responsabilidades claras.
- Mensagens de erro técnicas apenas nos logs, não expostas ao público.
- Dados de demonstração separados dos dados reais.
- README com instalação, configuração, funcionalidades, modelo da base de dados e contas de demonstração.

---

## 12. Critérios de Conclusão

- [ ] Um visitante consegue explorar animais e consultar informação do zoológico.
- [ ] Um utilizador consegue registar-se, iniciar sessão e editar o perfil.
- [ ] Os favoritos são guardados na base de dados e não duplicam.
- [ ] O sistema cria encomendas e bilhetes individuais com códigos únicos.
- [ ] O estado “pago” só é definido após confirmação fiável do pagamento.
- [ ] O administrador valida um bilhete por PIN e/ou QR Code.
- [ ] Um bilhete utilizado não pode voltar a ser aceite.
- [ ] Nenhuma conta que não seja de administrador consegue aceder ao painel ou validar bilhetes.
- [ ] O administrador gere animais, categorias, habitats, bilhetes, utilizadores e conteúdos.
- [ ] O site funciona em telemóvel e computador.
- [ ] Existem validações, consultas preparadas e proteção das páginas privadas.
- [ ] O README explica a instalação e como testar o projeto.