USE [master]
GO
/****** Object:  Database [cikarang_inland_port_test]    Script Date: 30/09/2022 11:57:13 ******/
CREATE DATABASE [cikarang_inland_port_test]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'cikarang_inland_port_test', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\cikarang_inland_port_test.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'cikarang_inland_port_test_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\cikarang_inland_port_test_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [cikarang_inland_port_test] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [cikarang_inland_port_test].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [cikarang_inland_port_test] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ARITHABORT OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [cikarang_inland_port_test] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [cikarang_inland_port_test] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET  DISABLE_BROKER 
GO
ALTER DATABASE [cikarang_inland_port_test] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [cikarang_inland_port_test] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET RECOVERY FULL 
GO
ALTER DATABASE [cikarang_inland_port_test] SET  MULTI_USER 
GO
ALTER DATABASE [cikarang_inland_port_test] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [cikarang_inland_port_test] SET DB_CHAINING OFF 
GO
ALTER DATABASE [cikarang_inland_port_test] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [cikarang_inland_port_test] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [cikarang_inland_port_test] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [cikarang_inland_port_test] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'cikarang_inland_port_test', N'ON'
GO
ALTER DATABASE [cikarang_inland_port_test] SET QUERY_STORE = OFF
GO
USE [cikarang_inland_port_test]
GO
/****** Object:  Table [dbo].[Container]    Script Date: 30/09/2022 11:57:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Container](
	[ContainerNumber] [varchar](max) NOT NULL,
	[Size] [int] NOT NULL,
	[Type] [varchar](10) NOT NULL,
	[GateInDate] [datetime] NOT NULL,
	[DeletedDate] [datetimeoffset](7) NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Customer]    Script Date: 30/09/2022 11:57:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Customer](
	[Code_Cust] [varchar](max) NOT NULL,
	[Cust_Name] [varchar](50) NOT NULL,
	[Address] [varchar](50) NOT NULL,
	[Join_Date] [datetime] NOT NULL,
	[Order_Type] [varchar](50) NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Forwarder]    Script Date: 30/09/2022 11:57:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Forwarder](
	[Code_fwd] [varchar](max) NOT NULL,
	[Fwd_Name] [varchar](50) NOT NULL,
	[Address] [varchar](50) NOT NULL,
	[Code_Cust] [varchar](max) NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Order]    Script Date: 30/09/2022 11:57:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Order](
	[Order_id] [bigint] NOT NULL,
	[Code_Cust] [varchar](max) NOT NULL,
	[Container_no] [varchar](max) NOT NULL,
	[Type] [varchar](50) NOT NULL,
	[Amount] [int] NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
USE [master]
GO
ALTER DATABASE [cikarang_inland_port_test] SET  READ_WRITE 
GO
