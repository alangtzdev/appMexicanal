const typeTablesUsers = {
   adminUsers: {
      isDinamycColumns: true,
      columns: [
         typeColumnUsers.username,
         typeColumnUsers.email,
         typeColumnUsers.rol,
         typeColumnUsers.name,
         typeColumnUsers.apPaterno,
         typeColumnUsers.apMaterno,
         typeColumnUsers.gender,
         typeColumnUsers.acciones
      ],
      fnGet: getUsers
   }
}