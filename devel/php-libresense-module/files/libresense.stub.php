<?php

/** @generate-class-entries */

function libresense_kill_srcstates(string $ip1, ?string $ip2 = null): true|null {}
function libresense_kill_states(string $ip1, ?string $ip2 = null, ?string $iface = null, ?string $proto = null): true|null {}
#ifdef ETHERSWITCH_FUNCTIONS
function libresense_etherswitch_getinfo(string $dev): array|null {}
function libresense_etherswitch_getport(string $dev, int $port): array|null {}
function libresense_etherswitch_setport(string $dev, int $port, int $pvid): bool {}
function libresense_etherswitch_setport_state(string $dev, int $port, string $state): bool {}
function libresense_etherswitch_getlaggroup(string $dev, int $laggroup): array|null {}
function libresense_etherswitch_getvlangroup(string $dev, int $vlangroup): array|null {}
function libresense_etherswitch_setlaggroup(string $dev, int $laggroup, array $data = null): int {}
function libresense_etherswitch_setvlangroup(string $dev, int $vlangroup, int $vlan, array $data = null): int {}
function libresense_etherswitch_setmode(string $dev, string $mode): int {}
#endif
function libresense_ip_to_mac(string $ip, string $rifname = null): array|null {}
function libresense_getall_interface_addresses(string $ifname): array|null {}
function libresense_get_ifaddrs(string $ifname): array|null {}
function libresense_get_interface_addresses(string $interface): array|null {}
function libresense_bridge_add_member(string $ifname, string $ifchild): bool {}
function libresense_bridge_del_member(string $ifname, string $ifchild): bool {}
function libresense_bridge_member_flags(string $ifname, string $ifchild, int $flags): bool {}
function libresense_interface_listget(int $flags = 0): array|null {}
function libresense_interface_create(string $ifname): string|null {}
function libresense_interface_create2(string $ifname): string|null {}
function libresense_interface_destroy(string $ifname): array|true {}
function libresense_interface_setaddress(string $ifname, string $address): array|bool {}
function libresense_interface_deladdress(string $ifname, string $address): array|bool {}
function libresense_interface_rename(string $ifname, string $newifname): array|true {}
function libresense_ngctl_name(string $ifname, string $newifname): true|null {}
function libresense_vlan_create(string $ifname, string $parentifname, int $tag, int $pcp): true|null {}
function libresense_interface_getmtu(string $ifname): array|null {}
function libresense_interface_mtu(string $ifname, int $mtu): true|null {}
function libresense_interface_flags(string $ifname, int $flags): true|null {}
function libresense_interface_capabilities(string $ifname, int $caps): true|null {}
function libresense_get_interface_info(string $interface): array|null {}
function libresense_get_interface_stats(string $interface): array|null {}
function libresense_get_pf_rules(bool $ethrules = false, string $path = ""): array|false {}
function libresense_get_pf_states(array $arr = null): array|null {}
function libresense_get_pf_stats(): array {}
function libresense_sync(): void {}
function libresense_fsync(string $fname): bool {}
function libresense_get_modem_devices(bool $show_info = false, int $poll_timeout = 700): array|null {}
function libresense_get_os_hw_data(): array|null {}
function libresense_get_os_kern_data(): array|null {}
function libresense_ipsec_list_sa(): array|null {}
#ifdef PF_CP_FUNCTIONS
function libresense_pf_cp_flush(string $path, string $type): bool|null {}
function libresense_pf_cp_get_eth_pipes(string $path): array|null {}
function libresense_pf_cp_get_eth_rule_counters(string $path): array|null {}
function libresense_pf_cp_zerocnt(string $path): null {}
function libresense_pf_cp_get_eth_last_active(string $path): array|null {}
function libresense_kenv_dump(): array|null {}
#endif

function libresense_interface_setpcp(string $ifname, int $pcp): bool {}
