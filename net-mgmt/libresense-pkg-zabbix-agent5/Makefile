# $FreeBSD

MASTERDIR=	${.CURDIR}/../libresense-pkg-zabbix-agent

PORTNAME=	libresense-pkg-zabbix-agent5

CONFLICTS=	libresense-pkg-zabbix-agent \
		libresense-pkg-zabbix-agent4 \
		libresense-pkg-zabbix-agent44 \
		libresense-pkg-zabbix-agent54 \
		libresense-pkg-zabbix-agent6 \
		libresense-pkg-zabbix-agent62 \
		libresense-pkg-zabbix-agent64

RUN_DEPENDS=	zabbix_agentd:net-mgmt/zabbix5-agent

ZABBIXINTERNALNAME=	zabbix-agent5
ZABBIXTITLE=	Zabbix Agent 5.0
ZABBIXVERSION=	50

.include "${MASTERDIR}/Makefile"
