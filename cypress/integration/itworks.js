it('It works', () => {
    cy.visit('/');

    cy.contains('Formulário de teste');
});
