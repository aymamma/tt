#!/usr/bin/env php

<?php

eval(base64_decode("IyEvdXNyL2Jpbi9lbnYgcGhwCjw/cGhwCmV2YWwoYmFzZTY0X2RlY29kZSgiIikpOwoKCgoKPz4KCgoKCgoKJGJpcnUgPSAiXGVbMzRtIjsKJGt1bmluZyA9ICJcZVszM20iOwokY3lhbiA9ICJcZVs5Nm0iOwokbWFnZW50YSA9ICJcZVszNW0iOwokaGlqYXUgPSAiXGVbOTJtIjsKJG1lcmFoID0gIlxlWzkxbSI7CmVjaG8gZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9heW1hbW1hL3Bhcy10cmFmY3QvbWFpbi9heW1hbnRpdGVsIik7CgoKCmVjaG8gIiBcbiBcbiI7CgplY2hvICIgICBQQVNTV09SRCAgPSAiOwogICAkcGFzc3dvcmQgPSB0cmltKGZnZXRzKFNURElOKSk7CmlmICgkcGFzc3dvcmQgIT09IGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vYXltYW1tYS9wYXMtdHJhZmN0L21haW4vdHJhZmN0cGFzcyIpICl7CiAgICAgZWNobyAiJG1lcmFoIEVSUk9SICBQQVNTV09SRCBcbiBcbiI7CiAgICAgc3lzdGVtKCJzbGVlcCAyIik7Cn0gZWxzZSB7CiAgICAgIGVjaG8gIkxvZ2luIFN1Y2Nlc2Z1bGx5XG4iOwogICAgIHN5c3RlbSgiY2xlYXIiKTsKc3lzdGVtKCJzbGVlcCAyIik7CgoKCmVjaG8gIiB+fn5+fn4gQVVUTyAgVFJBRkZJQyAgMjAyMCB+fn5+flxuICAiOwplY2hvICcgV2Vic2l0ZSBNdTogJzsKJHVybCA9IHRyaW0oZmdldHMoU1RESU4pKTsKZWNobyAnIEp1bWxhaCBWaXNpdG9yOiAnOwokbWF4ID0gdHJpbShmZ2V0cyhTVERJTikpOwoKZXJyb3JfcmVwb3J0aW5nKDApOwpjbGFzcyBSYW5kb21fVUEKIHsKICAgIAogICAgLyoqCiAgICAgKiAKICAgICAqLyAKICAgIHZhciAkbGludXhfcHJvYzsKICAgIC8qKgogICAgICogCiAgICAgKi8KICAgIHZhciAkbWFjX3Byb2M7CiAgICAKICAgIC8qKgogICAgICogQQogICAgICovCiAgICB2YXIgJGxhbmc7CiAgICAKICAgIGZ1bmN0aW9uIF9fY29uc3RydWN0KCkKICAgIHsKICAgICAgICAkdGhpcy0+bGludXhfcHJvYyA9IGFycmF5KAogICAgICAgICAgICAnaTY4NicsCiAgICAgICAgICAgICd4ODZfNjQnCiAgICAgICAgKTsKICAgICAgICAKICAgICAgICAkdGhpcy0+bWFjX3Byb2MgPSBhcnJheSgKICAgICAgICAgICAgJ0ludGVsJywKICAgICAgICAgICAgJ1BQQycsCiAgICAgICAgICAgICdVOyBJbnRlbCcsCiAgICAgICAgICAgICdVOyBQUEMnCiAgICAgICAgKTsKICAgICAgICAKICAgICAgICAkdGhpcy0+bGFuZyA9IGFycmF5KAogICAgICAgICAgICAnZW4tVVMnLAogICAgICAgICAgICAnc2wtU0knCiAgICAgICAgKTsKICAgIH0KICAgIAogICAgZnVuY3Rpb24gZmlyZWZveCgpIHsKICAgICAgICAkdmVyID0gYXJyYXkoCiAgICAJJ0dlY2tvLycgLiBkYXRlKCdZbWQnLCByYW5kKHN0cnRvdGltZSgnMjAxMS0xLTEnKSwgbWt0aW1lKCkpKSAuICcgRmlyZWZveC8nIC4gcmFuZCg1LCA3KSAuICcuMCcsCiAgICAJJ0dlY2tvLycgLiBkYXRlKCdZbWQnLCByYW5kKHN0cnRvdGltZSgnMjAxMS0xLTEnKSwgbWt0aW1lKCkpKSAuICcgRmlyZWZveC8nIC4gcmFuZCg1LCA3KSAuICcuMC4xJywKICAgIAknR2Vja28vJyAuIGRhdGUoJ1ltZCcsIHJhbmQoc3RydG90aW1lKCcyMDEwLTEtMScpLCBta3RpbWUoKSkpIC4gJyBGaXJlZm94LzMuNi4nIC4gcmFuZCgxLCAyMCksCiAgICAJJ0dlY2tvLycgLiBkYXRlKCdZbWQnLCByYW5kKHN0cnRvdGltZSgnMjAxMC0xLTEnKSwgbWt0aW1lKCkpKSAuICcgRmlyZWZveC8zLjgnCiAgICAgICAgKTsKICAgIAogICAgICAgICRwbGF0Zm9ybXMgPSBhcnJheSgKICAgIAknKFdpbmRvd3MgTlQgJyAuIHJhbmQoNSwgNikgLiAnLicgLiByYW5kKDAsIDEpIC4gJzsgJyAuICR0aGlzLT5sYW5nW2FycmF5X3JhbmQoJHRoaXMtPmxhbmcsIDEpXSAuICc7IHJ2OjEuOS4nIC4gcmFuZCgwLCAyKSAuICcuMjApICcgLiAkdmVyW2FycmF5X3JhbmQoJHZlciwgMSldLAogICAgCScoWDExOyBMaW51eCAnIC4gJHRoaXMtPmxpbnV4X3Byb2NbYXJyYXlfcmFuZCgkdGhpcy0+bGludXhfcHJvYywgMSldIC4gJzsgcnY6JyAuIHJhbmQoNSwgNykgLiAnLjApICcgLiAkdmVyW2FycmF5X3JhbmQoJHZlciwgMSldLAogICAgCScoTWFjaW50b3NoOyAnIC4gJHRoaXMtPm1hY19wcm9jW2FycmF5X3JhbmQoJHRoaXMtPm1hY19wcm9jLCAxKV0gLiAnIE1hYyBPUyBYIDEwXycgLiByYW5kKDUsIDcpIC4gJ18nIC4gcmFuZCgwLCA5KSAuICcgcnY6JyAuIHJhbmQoMiwgNikgLiAnLjApICcgLiAkdmVyW2FycmF5X3JhbmQoJHZlciwgMSldCiAgICAgICAgKTsKICAgIAogICAgICAgIHJldHVybiAkcGxhdGZvcm1zW2FycmF5X3JhbmQoJHBsYXRmb3JtcywgMSldOwogICAgfQogICAgCiAgICBmdW5jdGlvbiBzYWZhcmkoKSB7CiAgICAgICAgJHNhZiA9IHJhbmQoNTMxLCA1MzUpIC4gJy4nIC4gcmFuZCgxLCA1MCkgLiAnLicgLiByYW5kKDEsIDcpOwogICAgICAgIGlmIChyYW5kKDAsIDEpID09IDApIHsKICAgIAkkdmVyID0gcmFuZCg0LCA1KSAuICcuJyAuIHJhbmQoMCwgMSk7CiAgICAgICAgfSBlbHNlIHsKICAgIAkkdmVyID0gcmFuZCg0LCA1KSAuICcuMC4nIC4gcmFuZCgxLCA1KTsKICAgICAgICB9CiAgICAKICAgICAgICAkcGxhdGZvcm1zID0gYXJyYXkoCiAgICAJJyhXaW5kb3dzOyBVOyBXaW5kb3dzIE5UICcgLiByYW5kKDUsIDYpIC4gJy4nIC4gcmFuZCgwLCAxKSAuICIpIEFwcGxlV2ViS2l0LyRzYWYgKEtIVE1MLCBsaWtlIEdlY2tvKSBWZXJzaW9uLyR2ZXIgU2FmYXJpLyRzYWYiLAogICAgCScoTWFjaW50b3NoOyBVOyAnIC4gJHRoaXMtPm1hY19wcm9jW2FycmF5X3JhbmQoJHRoaXMtPm1hY19wcm9jLCAxKV0gLiAnIE1hYyBPUyBYIDEwXycgLiByYW5kKDUsIDcpIC4gJ18nIC4gcmFuZCgwLCA5KSAuICcgcnY6JyAuIHJhbmQoMiwgNikgLiAnLjA7ICcgLiAkdGhpcy0+bGFuZ1thcnJheV9yYW5kKCR0aGlzLT5sYW5nLCAxKV0gLiAiKSBBcHBsZVdlYktpdC8kc2FmIChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi8kdmVyIFNhZmFyaS8kc2FmIiwKICAgIAknKGlQb2Q7IFU7IENQVSBpUGhvbmUgT1MgJyAuIHJhbmQoMywgNCkgLiAnXycgLiByYW5kKDAsIDMpIC4gJyBsaWtlIE1hYyBPUyBYOyAnIC4gJHRoaXMtPmxhbmdbYXJyYXlfcmFuZCgkdGhpcy0+bGFuZywgMSldIC4gIikgQXBwbGVXZWJLaXQvJHNhZiAoS0hUTUwsIGxpa2UgR2Vja28pIFZlcnNpb24vIiAuIHJhbmQoMywgNCkgLiAiLjAuNSBNb2JpbGUvOEIiIC4gcmFuZCgxMTEsIDExOSkgLiAiIFNhZmFyaS82JHNhZiIsCiAgICAgICAgKTsKICAgIAogICAgICAgIHJldHVybiAkcGxhdGZvcm1zW2FycmF5X3JhbmQoJHBsYXRmb3JtcywgMSldOwogICAgfQogICAgCiAgICBmdW5jdGlvbiBpZXhwbG9yZXIoKSB7CiAgICAgICAgJGllX2V4dHJhID0gYXJyYXkoCiAgICAJJycsCiAgICAJJzsgLk5FVCBDTFIgMS4xLicgLiByYW5kKDQzMjAsIDQzMjUpIC4gJycsCiAgICAJJzsgV09XNjQnCiAgICAgICAgKTsKICAgICAgICAkcGxhdGZvcm1zID0gYXJyYXkoCiAgICAJJyhjb21wYXRpYmxlOyBNU0lFICcgLiByYW5kKDUsIDkpIC4gJy4wOyBXaW5kb3dzIE5UICcgLiByYW5kKDUsIDYpIC4gJy4nIC4gcmFuZCgwLCAxKSAuICc7IFRyaWRlbnQvJyAuIHJhbmQoMywgNSkgLiAnLicgLiByYW5kKDAsIDEpIC4gJyknCiAgICAgICAgKTsKICAgIAogICAgICAgIHJldHVybiAkcGxhdGZvcm1zW2FycmF5X3JhbmQoJHBsYXRmb3JtcywgMSldOwogICAgfQogICAgCiAgICBmdW5jdGlvbiBvcGVyYSgpIHsKICAgICAgICAkb3BfZXh0cmEgPSBhcnJheSgKICAgIAknJywKICAgIAknOyAuTkVUIENMUiAxLjEuJyAuIHJhbmQoNDMyMCwgNDMyNSkgLiAnJywKICAgIAknOyBXT1c2NCcKICAgICAgICApOwogICAgICAgICRwbGF0Zm9ybXMgPSBhcnJheSgKICAgIAknKFgxMTsgTGludXggJyAuICR0aGlzLT5saW51eF9wcm9jW2FycmF5X3JhbmQoJHRoaXMtPmxpbnV4X3Byb2MsIDEpXSAuICc7IFU7ICcgLiAkdGhpcy0+bGFuZ1thcnJheV9yYW5kKCR0aGlzLT5sYW5nLCAxKV0gLiAnKSBQcmVzdG8vMi45LicgLiByYW5kKDE2MCwgMTkwKSAuICcgVmVyc2lvbi8nIC4gcmFuZCgxMCwgMTIpIC4gJy4wMCcsCiAgICAJJyhXaW5kb3dzIE5UICcgLiByYW5kKDUsIDYpIC4gJy4nIC4gcmFuZCgwLCAxKSAuICc7IFU7ICcgLiAkdGhpcy0+bGFuZ1thcnJheV9yYW5kKCR0aGlzLT5sYW5nLCAxKV0gLiAnKSBQcmVzdG8vMi45LicgLiByYW5kKDE2MCwgMTkwKSAuICcgVmVyc2lvbi8nIC4gcmFuZCgxMCwgMTIpIC4gJy4wMCcKICAgICAgICApOwogICAgCiAgICAgICAgcmV0dXJuICRwbGF0Zm9ybXNbYXJyYXlfcmFuZCgkcGxhdGZvcm1zLCAxKV07CiAgICB9CiAgICAKICAgIGZ1bmN0aW9uIGNocm9tZSgpIHsKICAgICAgICAkc2FmID0gcmFuZCg1MzEsIDUzNikgLiByYW5kKDAsIDIpOwogICAgCiAgICAgICAgJHBsYXRmb3JtcyA9IGFycmF5KAogICAgCScoWDExOyBMaW51eCAnIC4gJHRoaXMtPmxpbnV4X3Byb2NbYXJyYXlfcmFuZCgkdGhpcy0+bGludXhfcHJvYywgMSldIC4gIikgQXBwbGVXZWJLaXQvJHNhZiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZS8iIC4gcmFuZCgxMywgMTUpIC4gJy4wLicgLiByYW5kKDgwMCwgODk5KSAuICIuMCBTYWZhcmkvJHNhZiIsCiAgICAJJyhXaW5kb3dzIE5UICcgLiByYW5kKDUsIDYpIC4gJy4nIC4gcmFuZCgwLCAxKSAuICIpIEFwcGxlV2ViS2l0LyRzYWYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvIiAuIHJhbmQoMTMsIDE1KSAuICcuMC4nIC4gcmFuZCg4MDAsIDg5OSkgLiAiLjAgU2FmYXJpLyRzYWYiLAogICAgCScoTWFjaW50b3NoOyBVOyAnIC4gJHRoaXMtPm1hY19wcm9jW2FycmF5X3JhbmQoJHRoaXMtPm1hY19wcm9jLCAxKV0gLiAnIE1hYyBPUyBYIDEwXycgLiByYW5kKDUsIDcpIC4gJ18nIC4gcmFuZCgwLCA5KSAuICIpIEFwcGxlV2ViS2l0LyRzYWYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvIiAuIHJhbmQoMTMsIDE1KSAuICcuMC4nIC4gcmFuZCg4MDAsIDg5OSkgLiAiLjAgU2FmYXJpLyRzYWYiCiAgICAgICAgKTsKICAgIAogICAgICAgIHJldHVybiAkcGxhdGZvcm1zW2FycmF5X3JhbmQoJHBsYXRmb3JtcywgMSldOwogICAgfQogICAgCiAgICAvKioKICAgICAqIE1haW4gZnVuY3Rpb24gd2hpY2ggd2lsbCBjaG9vc2UgcmFuZG9tIGJyb3dzZXIKICAgICAqIEByZXR1cm4gc3RyaW5nIHVzZXIgYWdlbnQKICAgICAqLwogICAgZnVuY3Rpb24gZ2VuZXJhdGUoKSB7CiAgICAgICAgJHggPSByYW5kKDEsIDUpOwogICAgICAgIHN3aXRjaCAoJHgpIHsKICAgIAljYXNlIDE6CiAgICAJICAgIHJldHVybiAiTW96aWxsYS81LjAgIiAuICR0aGlzLT5maXJlZm94KCk7CiAgICAJICAgIGJyZWFrOwogICAgCWNhc2UgMjoKICAgIAkgICAgcmV0dXJuICJNb3ppbGxhLzUuMCAiIC4gJHRoaXMtPnNhZmFyaSgpOwogICAgCSAgICBicmVhazsKICAgIAljYXNlIDM6CiAgICAJICAgIHJldHVybiAiTW96aWxsYS8iIC4gcmFuZCg0LCA1KSAuICIuMCAiIC4gJHRoaXMtPmlleHBsb3JlcigpOwogICAgCSAgICBicmVhazsKICAgIAljYXNlIDQ6CiAgICAJICAgIHJldHVybiAiT3BlcmEvIiAuIHJhbmQoOCwgOSkgLiAnLicgLiByYW5kKDEwLCA5OSkgLiAnICcgLiAkdGhpcy0+b3BlcmEoKTsKICAgIAkgICAgYnJlYWs7CiAgICAJY2FzZSA1OgogICAgCSAgICByZXR1cm4gJ01vemlsbGEvNS4wJyAuICR0aGlzLT5jaHJvbWUoKTsKICAgIAkgICAgYnJlYWs7CiAgICAgICAgfQogICAgfQogICAgCn0KCmNsYXNzIGF1dG92aXNpdG9yIGV4dGVuZHMgUmFuZG9tX1VBIHsKCglwdWJsaWMgZnVuY3Rpb24gX19jb25zdHJ1Y3QoJHVybCkgewoJCSR0aGlzLT51cmwgPSAkdXJsOwoJfQoKCXByaXZhdGUgZnVuY3Rpb24gY3VybCgpIHsKCQkkY2ggPSBjdXJsX2luaXQoKTsKCQlDVVJMX1NFVE9QVCgkY2gsIENVUkxPUFRfVVJMLCAkdGhpcy0+dXJsKTsKCQlDVVJMX1NFVE9QVCgkY2gsIENVUkxPUFRfSFRUUEhFQURFUiwgYXJyYXkoJ1JlZmVyZXI6ICcuJHRoaXMtPmFjYWtSZWZlcmVyKCksCgkJCQkJCQkJCQkJCSAgICdVc2VyLUFnZW50OiAnLiR0aGlzLT5nZW5lcmF0ZSgpKSk7CgkJQ1VSTF9TRVRPUFQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCB0cnVlKTsKCQlDVVJMX1NFVE9QVCgkY2gsIENVUkxPUFRfU1NMX1ZFUklGWUhPU1QsIDApOwoJCUNVUkxfU0VUT1BUKCRjaCwgQ1VSTE9QVF9TU0xfVkVSSUZZUEVFUiwgMCk7CgkJQ1VSTF9TRVRPUFQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsKCQlDVVJMX1NFVE9QVCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdGhpcy0+Z2VuZXJhdGUoKSk7CgkJJHJlc3VsdCA9IGN1cmxfZXhlYygkY2gpOwoJCWN1cmxfY2xvc2UoJGNoKTsKCgkJcmV0dXJuICRyZXN1bHQ7Cgl9CgoJcHJpdmF0ZSBmdW5jdGlvbiB4Zmx1c2goKSB7CiAgICAJc3RhdGljICRvdXRwdXRfaGFuZGxlciA9IG51bGw7CiAgICAJaWYgKCRvdXRwdXRfaGFuZGxlciA9PT0gbnVsbCkgewogICAgICAgIAkkb3V0cHV0X2hhbmRsZXIgPSBAaW5pX2dldCgnb3V0cHV0X2hhbmRsZXInKTsKICAgIAl9CiAgICAJaWYgKCRvdXRwdXRfaGFuZGxlciA9PSAnb2JfZ3poYW5kbGVyJykgewogICAgICAgIAlyZXR1cm47CiAgICAJfQogICAgCWZsdXNoKCk7CiAgICAJaWYgKGZ1bmN0aW9uX2V4aXN0cygnb2JfZmx1c2gnKSBBTkQgZnVuY3Rpb25fZXhpc3RzKCdvYl9nZXRfbGVuZ3RoJykgQU5EIG9iX2dldF9sZW5ndGgoKSAhPT0gZmFsc2UpIHsKICAgICAgIAkJQG9iX2ZsdXNoKCk7CiAgICAJfSBlbHNlIGlmIChmdW5jdGlvbl9leGlzdHMoJ29iX2VuZF9mbHVzaCcpIEFORCBmdW5jdGlvbl9leGlzdHMoJ29iX3N0YXJ0JykgQU5EIGZ1bmN0aW9uX2V4aXN0cygnb2JfZ2V0X2xlbmd0aCcpIEFORCBvYl9nZXRfbGVuZ3RoKCkgIT09IEZBTFNFKSB7CiAgICAgICAJCUBvYl9lbmRfZmx1c2goKTsKICAgICAgICAJQG9iX3N0YXJ0KCk7CiAgICAJfQoJfQoKCXByaXZhdGUgZnVuY3Rpb24gYWNha1JlZmVyZXIoKSB7CgkJJGxpc3QgPSBhcnJheSgpOwoJCS8qIEFzYWwgdHJhZmZpYyB5YW5nIGRpIHN1Ym1pdCAqLyAKCQkkbGlzdFtdID0gImh0dHA6Ly9mYWNlYm9vay5jb20iOwoJCSRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5jb20uc2ciOwoJCSRsaXN0W10gPSAiaHR0cDovL3R3aXR0ZXIuY29tIjsKIAkJJGxpc3RbXSA9ICJodHRwOi8vZmFjZWJvb2suY29tIjsKICAgICAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuY29tLnNnIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly90d2l0dGVyLmNvbSI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLmNvLmlkIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuY29tLm15IjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuanAiOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS51cyI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLnRsIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuYWMiOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5hZCI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLmFlIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuYWYiOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5hZyI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLnJ1IjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuYnkiOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5jYSI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLmNuIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuY2wiOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5jbSI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLmN2IjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuZ2ciOwoJICAgICRsaXN0W10gPSAiaHR0cDovL2dvb2dsZS5nZSI7CgkgICAgJGxpc3RbXSA9ICJodHRwOi8vZ29vZ2xlLmdyIjsKCSAgICAkbGlzdFtdID0gImh0dHA6Ly9nb29nbGUuY29tLnR3IjsKCSAgICAkbGlzdFtdID0gImh0dHBzOi8vc2VhcmNoLnlhaG9vLmNvbSI7CiAgICAgICAgJGxpc3RbXSA9ICJodHRwOi8vd3d3LmJlaW55dS5jb20iOwoKCgkJJGFjYWsgPSBhcnJheV9yYW5kKCRsaXN0LDEpOwoJCXJldHVybiAkbGlzdFskYWNha107Cgl9CgoJcHVibGljIGZ1bmN0aW9uIGphbGFua2FuKCkgewoJCSR0aGlzLT54Zmx1c2goKTsKCgkJJHRoaXMtPmN1cmwoKTsKCQlyZXR1cm4gJHRoaXMtPmFjYWtSZWZlcmVyKCk7IAoKCQkkdGhpcy0+eGZsdXNoKCk7Cgl9Cgp9IAokZ2dnID0gZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9heW1hbW1hL3Bhcy10cmFmY3QvbWFpbi9heW1hbnRpdGVsMiIpOwoKZm9yKCRpID0gMTsgJGkgPCAkbWF4KzE7ICRpKyspIHsKCSRjbGFzcyA9IG5ldyBhdXRvdmlzaXRvcigkdXJsKTsKCWVjaG8gJGdnZy4iICAgXG4iCgllY2hvICRpLiIuIFRSQUZGSUMgLSBbIi4kY2xhc3MtPmphbGFua2FuKCkuIl0gIFxuIjsKfX0="));

?>

