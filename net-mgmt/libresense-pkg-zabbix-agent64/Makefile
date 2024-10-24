# $FreeBSD

MASTERDIR=	${.CURDIR}/../libresense-pkg-zabbix-agent

PORTNAME=	libresense-pkg-zabbix-agent64

CONFLICTS=
CONFLICTS+=	libresense-pkg-zabbix-agent
CONFLICTS+=	libresense-pkg-zabbix-agent4
CONFLICTS+=	libresense-pkg-zabbix-agent44
CONFLICTS+=	libresense-pkg-zabbix-agent5
CONFLICTS+=	libresense-pkg-zabbix-agent54
CONFLICTS+=	libresense-pkg-zabbix-agent6

RUN_DEPENDS=	zabbix_agentd:net-mgmt/zabbix64-agent

ZABBIXINTERNALNAME=	zabbix-agent64
ZABBIXTITLE=	Zabbix Agent 6.4
ZABBIXVERSION=	64

.include "${MASTERDIR}/Makefile"
