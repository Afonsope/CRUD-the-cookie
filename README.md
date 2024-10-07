# CRUD-the-cookie
### Resumo do Código PHP: Cookies e Sessões

Este script PHP demonstra a criação, modificação e exclusão de cookies e sessões, facilitando a gestão de dados temporários em aplicações web.

#### Funcionalidades:

1. **Início de Sessão**:
   - O script inicia ou retoma uma sessão usando `session_start()`.

2. **Criação de Cookie**:
   - Um cookie chamado `altitude` é criado com o valor inicial de "1500m", com uma expiração de 30 dias.

3. **Armazenamento de Sessão**:
   - A variável de sessão `pais` é criada e armazenada com o valor "Brasil".

4. **Modificação de Cookie**:
   - O valor do cookie `altitude` é modificado para "2000m" se o cookie já existir.

5. **Exclusão de Cookie e Sessão**:
   - O cookie `altitude` é excluído definindo sua expiração para uma hora atrás.
   - A variável de sessão `pais` é deletada usando `unset()`, caso esteja definida.

#### Exemplos de Saída:
- Criação e modificação de cookies e sessões é exibida na saída do script, informando o status atual.
