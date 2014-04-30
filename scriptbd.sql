CREATE TABLE Aluno (
  alu_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  alu_login INTEGER UNSIGNED NULL,
  PRIMARY KEY(alu_cod)
);

CREATE TABLE Disciplina (
  dis_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  dis_nome CHAR(40) NULL,
  dis_dominio CHAR(40) NULL,
  PRIMARY KEY(dis_cod)
);

CREATE TABLE Enquete (
  enq_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Perguntas_per_cod INTEGER UNSIGNED NOT NULL,
  Disciplina_dis_cod INTEGER UNSIGNED NOT NULL,
  Professor_pro_cod INTEGER UNSIGNED NOT NULL,
  enq_num_perg INTEGER UNSIGNED NULL,
  enq_num_resp INTEGER UNSIGNED NULL,
  enq_semestre INTEGER UNSIGNED NULL,
  enq_data INTEGER UNSIGNED NULL,
  enq_status INTEGER UNSIGNED NULL,
  PRIMARY KEY(enq_cod),
  INDEX Enquete_FKIndex1(Disciplina_dis_cod),
  INDEX Enquete_FKIndex2(Professor_pro_cod),
  INDEX Enquete_FKIndex3(Perguntas_per_cod)
);

CREATE TABLE Perguntas (
  per_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Respostas_res_cod INTEGER UNSIGNED NOT NULL,
  Respostas_Aluno_alu_cod INTEGER UNSIGNED NOT NULL,
  per_desc CHAR(40) NULL,
  PRIMARY KEY(per_cod),
  INDEX Perguntas_FKIndex1(Respostas_res_cod, Respostas_Aluno_alu_cod)
);

CREATE TABLE Professor (
  pro_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pro_nome CHAR(40) NULL,
  pro_cpf CHAR(40) NULL,
  PRIMARY KEY(pro_cod)
);

CREATE TABLE Respostas (
  res_cod INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Aluno_alu_cod INTEGER UNSIGNED NOT NULL,
  res_desc CHAR(40) NULL,
  PRIMARY KEY(res_cod, Aluno_alu_cod),
  INDEX Respostas_FKIndex1(Aluno_alu_cod)
);


