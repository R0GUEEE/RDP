
exports.up = function(knex) {
  return knex.schema
    .dropTable('User_Logins')
    .createTable('userdata', async function (table) {
      table.increments('id');
      table.string('email');
      table.string('password');
      table.string('first_name');
      table.string('last_name');
      table.string('store');
    })

};

exports.down = function(knex) {
  return knex.schema
    .dropTable('userdata')
    .createTable('User_Logins', async function (table) {
      table.text('email', 65535).notNullable();
      table.text('passwd', 65535).notNullable();
      table.text('first_name', 65535).notNullable();
      table.text('last_name', 65535).notNullable();
      table.text('store', 65535).notNullable();
    })
};
