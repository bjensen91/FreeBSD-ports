# $FreeBSD$

MASTERDIR=	${.CURDIR}/../libresense-pkg-zabbix-agent

PORTNAME=	libresense-pkg-zabbix-agent4

CONFLICTS=	libresense-pkg-zabbix-agent \
		libresense-pkg-zabbix-agent44 \
		libresense-pkg-zabbix-agent5 \
		libresense-pkg-zabbix-agent54 \
		libresense-pkg-zabbix-agent6 \
		libresense-pkg-zabbix-agent62 \
		libresense-pkg-zabbix-agent64

RUN_DEPENDS=	zabbix_agentd:net-mgmt/zabbix4-agent

ZABBIXINTERNALNAME=	zabbix-agent4
ZABBIXTITLE=	Zabbix Agent 4.0
ZABBIXVERSION=	40

.include "${MASTERDIR}/Makefile"
