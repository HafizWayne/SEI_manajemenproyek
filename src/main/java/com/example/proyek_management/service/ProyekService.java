package com.example.proyek_management.service;


import com.example.proyek_management.model.Proyek;
import com.example.proyek_management.repository.LokasiRepository;
import com.example.proyek_management.repository.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.Optional;


@Service
public class ProyekService {


        @Autowired
        private ProyekRepository proyekRepository;

        public Proyek getProyekById(Long id) {
            Optional<Proyek> proyek = proyekRepository.findById(id);
            return proyek.orElse(null);
        }

        // Metode lainnya (save, update, delete) bisa ditambahkan di sini
    }

