CREATE  DATABASE Almacen_el_hogar;

USE Almacen_el_hogar;

CREATE TABLE Proveedor(
	codigo int primary key,
	cedulaJuridica int not null unique,
	nombre varchar(20) not null,
	direccion varchar(30),
	correo varchar(30) unique
);

CREATE TABLE Almacen(
	cedulaJuridica int primary key,
	nombre varchar(20) not null,
	ubicacion varchar(20)
);

CREATE TABLE Almacen_Proveedor(
	idAlmacen int,
    idProveedor int,
    constraint fk_AP_Almcen foreign key (idAlmacen) references Almacen(cedulaJuridica),
    constraint fk_AP_Proveedor foreign key (idProveedor) references Proveedor(codigo),
    primary key (idAlmacen,idProveedor)
);

CREATE TABLE Cliente(
	cedula int primary key,
	nombre varchar(10) not null,
	primerApellido varchar(10) not null,
	segundoApellido varchar(10) not null,
	direccion varchar(30),
	ocupacion varchar(10)
);

CREATE TABLE Vendedor(
	codigo int primary key,
	cedula int not null unique,
	nombre varchar(20)
);

CREATE TABLE Factura(
	numeroFactura int primary key auto_increment,
	encabezado varchar(20) not null,
	fecha date,
	hora date,
	precioProducto float,
	montoTotal float,
	subtotal float,
    idCliente int,
    idVendedor int,
    constraint fk_Fact_Cliente foreign key (idCliente) references Cliente(cedula),
    constraint fk_Fact_Vendedor foreign key (idVendedor) references Vendedor(codigo)    
);


CREATE TABLE VentaCredito(
	financiamiento int,
	montoPrima float,
	numeroMensualidad int,
	montoMensual float,
    idFactura int,
    constraint fk_VCred_Factura foreign key (idFactura) references Factura(numeroFactura),
    primary key (idFactura)
);


CREATE TABLE Abono(
	numeroAbono int primary key auto_increment,
	fechaPago Date not null,
	montoPago float not null,
	saldo float not null,
    numCredito int,
    constraint fk_Abon_Credito foreign key (numCredito) references VentaCredito(idFactura)
);

CREATE TABLE VentaContado(
	nombreCliente varchar(20),
	idFactura int,
    constraint fk_VCont_Factura foreign key (idFactura) references Factura(numeroFactura),
    primary key (idFactura)
);

CREATE TABLE Articulos(
	codigo int primary key,
	descripcion varchar(13) not null,
	costo float,
	existencia int,
	modelo varchar(15),	
    idAlmacen int,
    constraint fk_Arti_Almcen foreign key (idAlmacen) references Almacen(cedulaJuridica)
);


CREATE TABLE Detalle(
	cantidad int,
	monto float,
	descuento float,
	idArticulo int,
    idFactura int,
    constraint fk_Detalle_Factura foreign key (idFactura) references Factura(numeroFactura),
    constraint fk_Detalle_Articulo foreign key (idArticulo) references Articulos(codigo),
    primary key (idArticulo,idFactura)
);




CREATE TABLE Nota(
	detalle varchar(30) not null,
    idCliente int,
    idFactura int,
    constraint fk_NCliente foreign key (idCliente) references Cliente(cedula),
    constraint fk_NFactura foreign key (idFactura) references Factura(numeroFactura),
    primary key (idFactura)
);

CREATE TABLE NotaCredito(
	numeroNota int,
	refinanciamiento int,
	monto float,
	constraint fk_numNotaC foreign key (numeroNota)  references Nota(idFactura),
	primary key (numeroNota)
);

CREATE TABLE NotaDebito(
	numeroNota int,
	monto float,
    constraint fk_numNotaD foreign key (numeroNota)  references Nota(idFactura),
	primary key (numeroNota)
);

CREATE TABLE Telefonos(
	telefonoPrimario int,
	telefonoSecundario int,
	otro int
);


